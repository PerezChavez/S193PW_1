<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>repaso</title>
</head>
<body style="display: flex; justify-content: center; aling-items: center; height: 100vh; margin:0; text-align: center" >
    <div class="contenedor">
    <h1>Convertidor</h1>
    <form>
    <div class ="text-center">
        <label for= "valor">Ingrese el valor a convertir</label>
        <input type="number" name="valor" id="valor" required>
        <br><br>
        <label for= "conver">Selecciona la conversión a realizar</label>
        <select name="conver" id="conver">
        <option value="m_g"> MB -> GB</option>
        <option value="m_g"> GB -> MB</option>
        <option value="m_g"> GB -> TB</option>
        <option value="m_g"> TB -> GB</option>
</select>
<br><br>
    <button type="submit">Convertir</button>

</div>
    </form>
</div>
</body>
</html>