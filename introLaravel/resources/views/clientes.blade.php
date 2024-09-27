@extends('layouts.plantilla') <!-- de donde se hereda -->
@section('contenido') <!-- limitar el contenido, de donde viene -->

    {{-- Inicia tarjetaCliente --}}
<div class="container mt-5 col-md-8">

  <div class="card text-justify font-monospace">

    <div class="card-header fs-5 text-primary">
      Carol Paola Chavez Piña 
    </div>

    <div class="card-body">
      <h5 class="fw-bold">chavezcarol@gmail.com</h5>
      <h5 class="fw-medium">4481501372</h5>
      <p class="card-text fw-lighter"></p>
    </div>

    <div class="card-footer text-muted">
      <button type="submit" class="btn btn-warning btn-sm">Actualizar</button>
      <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
    </div>

  </div>

</div>
{{-- Finaliza tarjetaCliente --}}

@endsection