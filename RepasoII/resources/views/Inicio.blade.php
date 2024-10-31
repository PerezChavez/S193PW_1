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
            <a class="navbar-brand" href="#">Biblioteca Chavez</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('rutaform') }}">Registrar Libro</a>
                    </li>
                    </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <h1>Bienvenido a nuestra biblioteca</h1>
        </div>

    {{-- Pie de página --}}
    <footer class="bg-dark text-white text-center mt-5 p-3">
        <p>Biblioteca Chavez &copy; {{ date('d M Y') }}</p>
    </footer>
</body>
</html>
