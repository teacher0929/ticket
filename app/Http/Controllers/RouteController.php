<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\TransportType;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'transportType' => ['required', 'integer', 'between:1,3'],
            'transport' => ['nullable', 'integer', 'min:1'],
        ]);
        $f_transportType = $request->transportType;
        $f_transport = $request->has('transport') ? $request->transport : null;

        $routes = Route::where('transport_type_id', $f_transportType)
            ->when(isset($f_transport), function ($query) use ($f_transport) {
                return $query->where('transport_id', $f_transport);
            })
            ->orderBy('departure_time')
            ->with('transport', 'fromStation', 'toStation')
            ->paginate()
            ->withQueryString();

        return view('route.index')
            ->with([
                'f_transportType' => $f_transportType,
                'routes' => $routes,
            ]);
    }
}
