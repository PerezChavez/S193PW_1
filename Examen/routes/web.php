<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

//Route::post('/')[Controlador::class, 'validarprenda'])-> name('inicio');