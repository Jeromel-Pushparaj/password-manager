<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::view('login', 'login')->name('login');

Route::view('generate', 'generate')->name('generate');
