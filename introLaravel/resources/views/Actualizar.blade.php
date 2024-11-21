@extends('layouts.plantilla')

@section('contenido')

<div class="container mt-5 col-md-6">

  @session('exito')
  {! <script>
  Swal.fire({
  title: "Respuesta Servidor!",
  text: "{{$value}}",
  icon: "success"
  });
  </script>!}
  @endsession


  <div class="card font-monospace">

    <div class="card-header fs-5 text-center text-primary">
      {{ __('Actualizar Cliente') }}
    </div>

    <div class="card-body text-justify ">

      <form action="{{ route('rutaupdate', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
          <label for="nombre" class="form-label">{{ __('Nombre') }}</label>
          <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $cliente->nombre) }}">
          <small class="text-danger fst-italic">{{ $errors->first('nombre') }}</small>
        </div>

        <div class="mb-3">
          <label for="apellido" class="form-label">{{ __('Apellido') }}</label>
          <input type="text" class="form-control" id="apellido" name="apellido" value="{{ old('apellido', $cliente->apellido) }}">
          <small class="text-danger fst-italic">{{ $errors->first('apellido') }}</small>
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">{{ __('Correo Electrónico') }}</label>
          <input type="email" class="form-control" id="correo" name="correo" value="{{ old('correo', $cliente->correo) }}">
          <small class="text-danger fst-italic">{{ $errors->first('correo') }}</small>
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">{{ __('Teléfono') }}</label>
          <input type="text" class="form-control" id="telefono" name="telefono" value="{{ old('telefono', $cliente->telefono) }}">
          <small class="text-danger fst-italic">{{ $errors->first('telefono') }}</small>
        </div>

        <div class="card-footer text-muted">
          <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">{{ __('Actualizar Datos') }}</button>
          </div>
        </div>

      </form>

    </div>

  </div>

</div>

@endsection
