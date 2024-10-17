<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
   return view('inicio');
 });


//Route::view('/','Inicio')->name('rutaInicio');
