<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
   return view('inicio');
 });


Route::view('/repaso1','repaso1')->name('rutarepaso1');
