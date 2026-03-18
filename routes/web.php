<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('result', function () {
    return view('result');
});

Route::get('/', function () {
    return view('contact');
});

Route::post('/submit', function (Request $request) {

    $data = $request->validate([
        'nombre'      => 'required',
        'telefono'    => 'required',
        'direccion'   => 'required',
        'email'       => 'required|email',
        'estadoCivil' => 'required',
    ]);

    session($data);

    return redirect('/result');
});