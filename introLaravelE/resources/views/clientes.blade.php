@extends('layouts.plantilla')
@section('titulo','Clientes')
@section('contenido')


    {{-- Inicia tarjetaCliente --}}
    <div class="container mt-5 col-md-8">

        @foreach ($consulta as $cliente)
        

    <div class="card text-justify font-monospace">

        <div class="card-header fs-5 text-primary">
            {{$cliente->nombre}} - {{$cliente->apellido}}
        </div>

        <div class="card-body">
        <h5 class="fw-bold">{{$cliente->correo}}</h5>
        <h5 class="fw-medium">{{$cliente->telefono}}</h5>
        <p class="card-text fw-lighter"></p>
        </div>

        <div class="card-footer text-muted">  
        <a href="{{ route('cliente.edit', $cliente->id)}}" type="submit" class="btn btn-warning btn-sm">{{__('Actualizar')}}</a>
        
        <form action="{{ route('cliente.destroy', $cliente->id) }}" method="POST" style="display:inline-block;" class="form-eliminar">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-eliminar">Eliminar</button>
                </form>
</div>

    </div>
    @endforeach
    </div>
    {{-- Finaliza tarjetaCliente --}}

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const eliminarButtons = document.querySelectorAll('.btn-eliminar');
        
        eliminarButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                const form = this.closest('.form-eliminar');
                
                Swal.fire({
                    title: '¿Estás seguro?',
                    text: "No podrás revertir esta acción.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
    

       
</script>


@endsection