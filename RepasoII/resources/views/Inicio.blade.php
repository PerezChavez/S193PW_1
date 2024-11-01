<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Inicio</title>
</head>
<body>
    {{-- Barra de navegación --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{__('Biblioteca Chavez')}}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutaform') }}">{{__('Registrar Libro')}}</a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="card font-monospace">

    <div class="card-header fs-5 text-center text-primary">

    <div class="container mt-5">
        <h1 class ="text-justify ">{{__('Bienvenido a nuestra biblioteca') }}</h1>

    </div>
</div>
<div class="container mt-5">
        <h1>{{__('24 de octubre - Día de las Bibliotecas')}}</h1>
        <p class ="text-justify ">{{__('El Día de las Bibliotecas se celebra cada 24 de octubre desde el año 1997. Este día nació como iniciativa de la Asociación Española de Amigos del Libro Infantil y Juvenil con el objetivo de concienciar a la sociedad de la importancia de la lectura y como homenaje y reconocimiento a la labor de los bibliotecarios/as. El lema de este año, Por un futuro sostenible», pretende destacar el papel fundamental que desempeñan todas las tipologías de bibliotecas (públicas, escolares,universitarias, especializadas y nacionales/regionales) en la consecución de los Objetivos de Desarrollo Sostenible de la Agenda 2030.')}}</p>        
    </div>
</div>

    {{-- Pie de página --}}
    <footer class="bg-dark text-white text-center mt-5 p-3">
    <p>{{__('Biblioteca Chavez')}} &copy;  {{ date('d/M/Y') }}</p>
    </footer>
</body>
</html>
