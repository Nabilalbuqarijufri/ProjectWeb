<?php

use App\Http\Controllers\Auth\Login;
use App\Http\Controllers\Auth\Logout;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Register;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

// Register Routes
Route::view('/register', 'auth.register', ['title' => 'Register Page'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', Register::class)
    ->middleware('guest');

// Login Route
Route::view('/login', 'auth.login', ['title' => 'Login Page'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', Login::class)
    ->middleware('guest');

// Logout Route
Route::post('/logout', Logout::class)
    ->middleware('auth')
    ->name('logout');