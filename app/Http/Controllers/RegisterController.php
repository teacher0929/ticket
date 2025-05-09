<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'alpha', 'max:50'],
            'surname' => ['required', 'string', 'alpha', 'max:50'],
            'username' => ['required', 'string', 'alpha_num', 'max:50', Rule::unique('users')],
            'password' => ['required', 'string', 'between:8,50'],
        ]);

        $user = User::create($request->all());

        Auth::login($user);

        return redirect()->route('home');
    }
}
