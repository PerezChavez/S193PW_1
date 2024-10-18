<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorRepaso;
//  Route::get('/', function () {
//    return view('inicio');
//  });


 

// Route::view('/repaso1','repaso1')->name('rutarepaso1');

Route::get('/', [ControladorRepaso::class, 'inicio'])->name('rutainicio');
Route::get('/repaso1', [ControladorRepaso::class, 'repaso1'])->name('rutarepaso1');
Route::post('/calcularConversion', [ControladorRepaso::class, 'calcularConversion'])->name('rutafinal');
