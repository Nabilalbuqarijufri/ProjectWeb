<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('login', function () {
    return view('login', ['title' => 'Login Page']);
});

Route::get('register', function () {
    return view('register', ['title' => 'Register Page']);
});