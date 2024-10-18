<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorRepaso extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }
    public function repaso1()
    {
        return view('repaso1');
    }

    public function calcularConversion(Request $request) {
        $valor = $request->input('valor');
        $conver = $request->input('conver');
        $resultado = '';
    
        switch ($conver) {
            case 'm_g':
                $resultado = $valor . ' El resultado es: ' . ($valor / 1024) ;
                break;
            case 'g_m':
                $resultado = $valor . ' El resultado es: ' . ($valor * 1024) ;
                break;
            case 'g_t':
                $resultado = $valor . ' El resultado es:' . ($valor / 1024)  ;
                break;
            case 't_g':
                $resultado = $valor . ' El resultado es: ' . ($valor * 1024) ;
                break;
            default:
                $resultado = 'Ingresa de nuevo el valor';
        }
    
        return view('repaso1', ['resultado' => $resultado]);
    }
    

}
