<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ProfileController extends Controller
{
    public function edit()
    {
        $user = Auth::user();

        return view('profile.edit')
            ->with([
                'user' => $user,
            ]);
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'alpha', 'max:50'],
            'surname' => ['required', 'string', 'alpha', 'max:50'],
            'username' => ['required', 'string', 'alpha_num', 'max:50', Rule::unique('users')->ignore(Auth::id())],
            'password' => ['nullable', 'string', 'between:8,50'],
        ]);

        $user = User::findOrFail(Auth::id());
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->username = $request->username;
        if (isset($request->password)) {
            $user->password = bcrypt($request->password);
        }
        $user->update();

        return redirect()->route('home')
            ->with([
                'success' => trans('app.profileUpdateSuccess'),
            ]);
    }
}
