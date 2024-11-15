<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;
use Illuminate\Support\Carbon\Carbon;

class ControladorVistas extends Controller
{
/* Usamos este controlador para administrar la lógica de las vistas*/

    public function home()
    {
        return view('inicio');

    }

    /* public function formulario()
    {
            return view ('formulario');

    }
 */    public function consulta()
    {
       

    }

    public function procesarCliente(validadorCliente $peticion)
    {
        //return 'Si llego la info del cliente :)'; //es una cadena de texto 
        // return $peticion->all();
        //return $peticion->path();
        //return $peticion->url();
       // return $peticion->ip();
       //RESPUESTAS DE REDIRECCIÓN 
    //return redirect('/'); //Redirecciona a inicio
    //return redirect()->route('rutaclientes'); //Redirecciona a ruta clientes
    //return back();
    //$id = [['usuario'=>1],['usuario'=>2]];
    //return view('formulario',compact('id'));

    //  $validacion = $peticion->validate([
       // 'txtnombre' =>'required|min:4|max:20',
        //'txtapellido' =>'required',
        //'txtcorreo' =>'required',
        //'txttelefono' =>'required|numeric',
        //  ]);
    $usuario= $peticion->input('txtnombre');

    session()->flash('exito', 'Se guardó el usuario:'.$usuario);
    return to_route('rutaform');

    }
    
}


