<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .full-height {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .content-box {
            padding: 20px;
            border: 2px solid #bd4691;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            font-size: 2.5rem;
        }

        h2 {
            font-size: 2rem;
        }

        h3 {
            font-size: 1.5rem;
        }
        button {
            background-color: #ffb3d9; 
            color: #000; 
            padding: 10px 20px
        }
    </style>
</head>
<body>

<div class="full-height">
    <div class="content-box">
        <h1>Carol Paola Chavez Piña</h1>
        <h2>Programación Web</h2>
        <h3> Repaso 1 Laravel <br> S193 </h3>
        <a href="¨{{ route('rutarepaso1')}}" class="btn btn-primary" >Repaso</a>
    </div>
</div>

</body>
</html>
