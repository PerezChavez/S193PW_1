<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/inicio" method="POST">
        <h1>Registro de prendas</h1>
        <label>Prenda: </label>
        <input type='text' class='form-control' name='txtprenda'></input>

        <label>Color: </label>
        <input type='text' class='form-control' name='txtColor'></input>

        <label>Cantidad: </label>
        <input type='number' class='form-control' name='txtCantidad'></input>

        <button type="submit">Guardar prenda</button>
        
</form>
</body>
</html>