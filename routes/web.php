<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('resultado', function () {
    return view('resultado');
});

Route::get('/', function () {
    return view('contact');
});