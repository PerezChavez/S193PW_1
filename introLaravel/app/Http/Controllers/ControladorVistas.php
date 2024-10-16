<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
/* Usamos este controlador para administrar la lógica de las vistas*/

    public function home()
    {
        return view('inicio');

    }

    public function formulario()
    {
        return view ('formulario');

    }
    public function consulta()
    {
        return view ('clientes');

    }

    public function procesarCliente(Request $peticion)
    {
        //return 'Si llego la info del cliente :)'; //es una cadena de texto 
        // return $peticion->all();
        //return $peticion->path();
        //return $peticion->url();
        return $peticion->ip();
    }
}
