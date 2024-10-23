<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>repaso</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f4f4f4;
            font-family: Arial, sans-serif;
        }
        .contenedor {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }
        h1 {
            color: #333;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color: #0056b3;
        }
        h5 {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>
<body style="display: flex; justify-content: center; aling-items: center; height: 100vh; margin:0; text-align: center" >
    <div class="contenedor">
    <h1>Convertidor</h1>
    <form action="/calcularConversion" method="POST">
        @csrf
    <div class ="text-center">        <label for= "valor">Ingrese el valor a convertir</label>
        <input type="number" name="valor" id="valor" required>
        <br><br>
        <label for= "conver">Selecciona la conversión a realizar</label>
        <select name="conver" id="conver">
        <option value="m_g"> MB -> GB</option>
        <option value="g_m"> GB -> MB</option>
        <option value="g_t"> GB -> TB</option>
        <option value="t_g"> TB -> GB</option>
</select>
<br><br>
    <button type="submit">Convertir</button> <br>
    @if(isset($resultado)) <br>
    <h5>El resultado es: <strong>{{$resultado}}</strong></h5>
    @endif
</div>
    </form>
</div>
</body>
</html>