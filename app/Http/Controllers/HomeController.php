<?php

namespace App\Http\Controllers;

use App\Models\Route;
use App\Models\TransportType;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'transportType' => ['nullable', 'integer', 'between:1,3'],
        ]);
        $f_transportType = $request->has('transportType') ? $request->transportType : 1;

        $transportTypes = TransportType::orderBy('id')
            ->get();

        $routes = Route::where('transport_type_id', $f_transportType)
            ->orderBy('departure_time')
            ->with('transport', 'fromStation', 'toStation')
            ->get();

        return view('home.index')
            ->with([
                'f_transportType' => $f_transportType,
                'transportTypes' => $transportTypes,
                'routes' => $routes,
            ]);
    }

    public function locale($locale)
    {
        session()->put('locale', $locale == 'ru' ? 'ru' : 'en');

        return redirect()->back();
    }


    public function users()
    {
        return User::get();
    }
}
