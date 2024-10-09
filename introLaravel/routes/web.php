<?php

use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('inicio');
})->name('rutaInicio');

Route::get('/form', function () {
    return view('formulario');
})->name('rutaForm')

Route::get('/consultar', function () {
    return view('clientes');
})->name('rutaClientes') */

/* RUTAS TIPO VIEW */
Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/consultar','clientes')->name('rutaclientes');
Route::view('/component','componentes')->name('rutacomponent');