<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Inicio</title>
</head>
<body>
    <h1>Bienvenido a nuestra biblioteca </h1>
    <a href= "{{ route('rutaform')}}">Registrar Libro</a>
</body>
</html>