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

/*Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
Route::post('/cliente', [clienteController::class, 'store'])->name('rutaEnviar');  
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');
Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
Route::get('/actualizar',[ControladorVistas::class, 'actualizar'])->name('rutaactualizar');
//Route::get('/actualizar/{id}',[clienteController::class, 'edit'])->name('rutaactualizar');
Route::post('/cliente', [clienteController::class, 'index'])->name('rutaConsulta'); 
Route::put('/clientes/{id}', [clienteControlador::class, 'update'])->name('rutaActualizar');*/

Route::get('/',[controladorVistas::class, 'home'])->name('rutainicio');
Route::view('/component', 'componentes')->name('rutacomponentes');
Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');

Route::get('/cliente/create', [clienteController::class, 'create'])->name('rutaform');
Route::post('/cliente', [clienteController::class, 'store'])->name('enviaCliente');
Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');

Route::delete('/clientes/{id}', [clienteController::class, 'destroy'])->name('rutadestroy');
Route::get('/clientes/{id}/edit', [clienteController::class, 'edit'])->name('rutaedit');
Route::put('/clientes/{id}', [clienteController::class, 'update'])->name('rutaupdate');


