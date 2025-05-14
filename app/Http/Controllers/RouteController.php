<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\Station;
use App\Models\Transport;
use App\Models\TransportType;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'transportType' => ['required', 'integer', 'between:1,3'],
            'transport' => ['nullable', 'integer', 'min:1'],
            'fromStation' => ['nullable', 'integer', 'min:1'],
            'toStation' => ['nullable', 'integer', 'min:1'],
        ]);
        $f_transportType = $request->transportType;
        $f_transport = $request->has('transport') ? $request->transport : null;
        $f_fromStation = $request->has('fromStation') ? $request->fromStation : null;
        $f_toStation = $request->has('toStation') ? $request->toStation : null;

        $routes = Route::where('transport_type_id', $f_transportType)
            ->when(isset($f_transport), function ($query) use ($f_transport) {
                return $query->where('transport_id', $f_transport);
            })
            ->when(isset($f_fromStation), function ($query) use ($f_fromStation) {
                return $query->where('from_station_id', $f_fromStation);
            })
            ->when(isset($f_toStation), function ($query) use ($f_toStation) {
                return $query->where('to_station_id', $f_toStation);
            })
            ->orderBy('departure_time')
            ->with('transport', 'fromStation', 'toStation')
            ->paginate()
            ->withQueryString();

        $transports = Transport::where('transport_type_id', $f_transportType)
            ->orderBy('name')
            ->get();

        $stations = Station::orderBy('name')
            ->get();

        return view('route.index')
            ->with([
                'f_transportType' => $f_transportType,
                'f_transport' => $f_transport,
                'f_fromStation' => $f_fromStation,
                'f_toStation' => $f_toStation,
                'routes' => $routes,
                'transports' => $transports,
                'stations' => $stations,
            ]);
    }
}
