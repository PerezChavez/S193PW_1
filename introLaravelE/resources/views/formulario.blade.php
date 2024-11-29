@extends('layouts.plantilla') <!-- de donde se hereda -->
@section('contenido') <!-- limitar el contenido, de donde viene -->

{{-- inicia Tarjeta con formulario --}}

  {{-- @dump($id) --}}


<div class="container mt-5 col-md-6">

  @session('exito')
  <script>
  Swal.fire({
  title: "Respuesta Servidor!",
  text: "{{$value}}",
  icon: "success"
  });
  </script>
   @endsession


  <div class="card font-monospace">

    <div class="card-header fs-5 text-center text-primary">
      {{ __('Registro de clientes') }}
    </div>

    <div class="card-body text-justify ">

      <form action="{{route('cliente.store')}}" method="POST" >
        @csrf 

        <div class="mb-3">
          <label for="nombre" class="form-label">{{ __('Nombre') }} </label>
          <input type="text" class="form-control" name="txtnombre" value="{{ old('txtnombre') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txtnombre') }}</small>
        </div>

        <div class="mb-3">
          <label for="Apellido" class="form-label">{{ __('Apellido') }}</label>
          <input type="text" class="form-control" name="txtapellido" value="{{ old('txtapellido') }}">
          <small  class="text-danger fst-italic">{{ $errors->first('txtapellido') }}</small>
        </div>

        <div class="mb-3">
          <label for="correo" class="form-label">{{ __('Correo') }} </label>
          <input type="text" class="form-control" name="txtcorreo" value="{{ old('txtcorreo') }}">
          <small  class="text-danger fst-italic">{{ $errors->first('txtcorreo') }}</small>
        </div>

        <div class="mb-3">
          <label for="telefono" class="form-label">{{ __('Telefono') }} </label>
          <input type="text" class="form-control" name="txttelefono" value="{{ old('txttelefono') }}" >
          <small  class="text-danger fst-italic">{{ $errors->first('txttelefono') }}</small>
        </div>

        <div class="card-footer text-muted">

          <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">{{ __('Guardar cliente') }} </button>
          </div>

        </div>

      </form>

    </div>

  </div>
</div>

{{-- Finaliza Tarjeta con formulario --}}

@endsection