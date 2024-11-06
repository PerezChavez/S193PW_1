<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Controllers\Controlador;

class Controlador extends Controller
{
    $validacion = $peticion->validate([
    'txtprenda'=>'required|string',
    'txtColor'=>'required|string',
    'txtCantidad'=>'required|inter|number'

    ]);

    $prenda = $peticion->input('txtprenda')

    session->flash ('exito', Se registró la prenda correctamente .$prenda)

}
