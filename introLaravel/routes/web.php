<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
use App\Http\Controllers\clienteController;

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
/* Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/consultar','clientes')->name('rutaclientes');
Route::view('/component','componentes')->name('rutacomponent'); */


Route::view('/component','componentes')->name('rutacomponent');

Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio');

//Route::get('/actualizar',[ControladorVistas::class, 'actualizar'])->name('rutaactualizar');


//Route::get('/consultar', [ControladorVistas::class, 'consulta'])->name('rutaclientes');

//Route::post('/enviarCliente', [ControladorVistas::class, 'procesarCliente'])->name('rutaEnviar');  //la parte de name no es importante cuando es post


/* RUTAS PARA CONTROLADOR CLIENTECONTRALADOR */

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
Route::post('/cliente', [clienteController::class, 'store'])->name('rutaEnviar');  
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
Route::get('/actualizar',[ControladorVistas::class, 'actualizar'])->name('rutaactualizar');


