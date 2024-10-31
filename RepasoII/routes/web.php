<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
 //    return view('inicio');
//});

Route::view('/form','FormularioLibro')->name('rutaform');
Route::view('/','Inicio')->name('rutainicio');

