<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')
    ->group(function () {
        Route::get('register', [RegisterController::class, 'create'])->name('register');
        Route::post('register', [RegisterController::class, 'store']);
    });

Route::middleware('guest')
    ->group(function () {
        Route::get('login', [LoginController::class, 'create'])->name('login');
        Route::post('login', [LoginController::class, 'store']);
    });

Route::middleware('auth')
    ->group(function () {
        Route::post('logout', [LoginController::class, 'destroy'])->name('logout');
    });

Route::controller(HomeController::class)
    ->group(function () {
        Route::get('', 'index')->name('home');
        Route::get('locale/{locale}', 'locale')->name('locale')->where(['locale', '[a-z]+']);
        Route::get('users', 'users');
    });

Route::controller(RouteController::class)
    ->prefix('routes')
    ->name('routes.')
    ->group(function () {
        Route::get('', 'index')->name('index');
        Route::get('{code}', 'show')->name('show')->where(['code' => '[A-Z0-9-]+']);
    });

Route::middleware('auth')
    ->group(function () {
        Route::controller(ProfileController::class)
            ->prefix('profile')
            ->name('profile.')
            ->group(function () {
                Route::get('edit', 'edit')->name('edit');
                Route::put('', 'update')->name('update');
            });
    });
