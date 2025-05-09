<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
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
