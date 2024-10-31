<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validarLibro;

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

    public function procesarLibro(validarLibro $peticion)
    {
    $libro= $peticion->input('txttitulo');

    session()->flash('exito', 'Se guardó el libro correctamente:'.$libro);
    return to_route('rutaform');

    }
    

}


