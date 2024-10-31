<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
/* Usamos este controlador para administrar la lógica de las vistas*/

    public function inicio()
    {
        return view('inicio');

    }

    public function FormularioLibro()
    {
        return view ('FormularioLibro');

    }

    
}


