<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login')->name('login');
});

Route::get('/register', function () {
    return view ('register')->name('register');
});

Route::get('/dashboard', function(){
    return view ('dashboard')->name('dashboard');
});

// Route::post('/login', LoginController::class, 'login')->name('login.attempt');
// Route::post('/register', RegisterController::class, 'register')->name('register.attempt');