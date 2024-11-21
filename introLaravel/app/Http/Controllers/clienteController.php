<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Http\Requests\validadorCliente;


class clienteController extends Controller
{
    /**
     * Nos sirve para la consulta del crud.
     */
    public function index()
    {
        $consultaClientes=DB::table('clientes')->get();
        return view('clientes', compact('consultaClientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(validadorCliente $request)
    {
        DB::table('clientes')->insert([
            "nombre" => $request->input('txtnombre'),
            "apellido" => $request->input('txtapellido'),
            "correo" => $request->input('txtcorreo'),
            "telefono" => $request->input('txttelefono'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
        ]);

        $usuario = $request->input('txtnombre');

        session()->flash('exito','Se guardó el usuario correctamente: '.$usuario);

        return to_route('rutaform');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $cliente = DB::table('clientes')->where('id', $id)->first();
    return view('Actualizar', compact('cliente'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'correo' => 'required|email|max:255',
            'telefono' => 'required|string|max:15',
        ]);

        DB::table('clientes')->where('id', $id)->update([
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'correo' => $request->input('correo'),
            'telefono' => $request->input('telefono'),
            'updated_at' => now(),
        ]);
    
        return redirect()->route('rutaclientes')->with('exito', 'Se actualizó el cliente de forma correcta.');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('clientes')->where('id', $id)->delete();

        session()->flash('exito', 'El fue eliminado correctamente.');
 
        return redirect()->route('rutaclientes');
    }
}