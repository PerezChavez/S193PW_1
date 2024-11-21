@extends('layouts.plantilla')

@section('titulo', 'Clientes')

@section('contenido')

<div class="container mt-5 col-md-8">
    @if (session('exito'))
        <script>
            Swal.fire({
                title: "¡Buen trabajo!",
                text: "{{ session('exito') }}",
                icon: "success"
            });
        </script>
    @endif

    @foreach ($consultaClientes as $cliente)
        <div class="card text-justify font-monospace mb-4">
            <div class="card-header fs-5 text-primary">
                {{ $cliente->nombre }} {{ $cliente->apellido }}
            </div>
            <div class="card-body">
                <h5 class="fw-bold">{{ $cliente->correo }}</h5>
                <h5 class="fw-medium">{{ $cliente->telefono }}</h5>
            </div>
            <div class="card-footer text-muted">
                <a href="{{ route('rutaedit', $cliente->id) }}" class="btn btn-warning">Actualizar</a>
                <form action="{{ route('rutadestroy', $cliente->id) }}" method="POST" style="display:inline-block;" class="form-eliminar">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-danger btn-eliminar">Eliminar</button>
                </form>
            </div>
        </div>
    @endforeach
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const eliminarButtons = document.querySelectorAll('.btn-eliminar');
        
        eliminarButtons.forEach(button => {
            button.addEventListener('click', function (event) {
                const form = this.closest('.form-eliminar');
                
                Swal.fire({
                    title: '¿Desea eliminar el registro?',
                    text: "Acción sin recuperación.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Confirmar',
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