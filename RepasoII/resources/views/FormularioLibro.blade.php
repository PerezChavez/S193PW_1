@extends('layouts.plantilla') <!-- de donde se hereda -->
@section('contenido') <!-- limitar el contenido, de donde viene -->

{{-- inicia Tarjeta con formulario --}}



<div class="container mt-5 col-md-6">

@if(session('exito'))
  <x-Alert tipo="success">{{session('exito')}}</x-Alert>
  @endif

   @session('exito')
  <x-Alert tipo="warning">{{$value}}</x-Alert>
  @endsession 


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
      Registro de Libro
    </div>

    <div class="card-body text-justify ">

      <form action="/enviar" method="POST">
        @csrf 

        <div class="mb-3">
          <label for="isbn" class="form-label">ISBN</label>
          <input type="text" class="form-control" name="txtisbn" value="{{ old('txtisbn') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txtisbn') }}</small>
        </div>

        <div class="mb-3">
          <label for="titulo" class="form-label">Título</label>
          <input type="text" class="form-control" name="txttitulo" value="{{ old('txttitulo') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txttitulo') }}</small>
        </div>

        <div class="mb-3">
          <label for="autor" class="form-label">Autor</label>
          <input type="text" class="form-control" name="txtautor" value="{{ old('txtautor') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txtautor') }}</small>
        </div>

        <div class="mb-3">
          <label for="paginas" class="form-label">Páginas</label>
          <input type="number" class="form-control" name="txtpaginas" value="{{ old('txtpaginas') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txtpaginas') }}</small>
        </div>

        <div class="mb-3">
          <label for="ano" class="form-label">Año</label>
          <input type="number" class="form-control" name="txtan" value="{{ old('txtan') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txtano') }}</small>
        </div>

        <div class="mb-3">
          <label for="editorial" class="form-label">Editorial</label>
          <input type="text" class="form-control" name="txteditorial" value="{{ old('txteditorial') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txteditorial') }}</small>
        </div>

        <div class="mb-3">
          <label for="email_editorial" class="form-label">Email de Editorial</label>
          <input type="email" class="form-control" name="txtemail_editorial" value="{{ old('txtemail_editorial') }}">
          <small class="text-danger fst-italic">{{ $errors->first('txtemail_editorial') }}</small>
        </div>

        <div class="card-footer text-muted">
          <div class="d-grid gap-2 mt-2 mb-1">
            <button type="submit" class="btn btn-success btn-sm">Guardar libro</button>
          </div>
        </div>

      </form>

      

    </div>

  </div>
</div>
{{-- Pie de página --}}
    <footer class="bg-dark text-white text-center mt-5 p-3">
        <p>Biblioteca Chavez &copy; {{ date('d M Y') }}</p>
    </footer>
{{-- Finaliza Tarjeta con formulario --}}

@endsection
