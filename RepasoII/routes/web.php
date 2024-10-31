<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;


//Route::get('/', function () {
 //    return view('inicio');
//});

//Route::view('/form','FormularioLibro')->name('rutaform');
//Route::view('/','Inicio')->name('rutainicio');
//Route::view('/cons','Inicio')->name('rutaconsulta');

Route::view('/component','componentes')->name('rutacomponent');

Route::get('/', [ControladorVistas::class, 'inicio'])->name('rutainicio');


Route::get('/form', [ControladorVistas::class, 'FormularioLibro'])->name('rutaform');

Route::post('/enviarLibro', [ControladorVistas::class, 'evaluarLibro'])->name('rutaEnviar');  //la parte de name no es importante cuando es post

