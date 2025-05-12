<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Formulario Computers:</h1>

    <form action="{{ route('computer.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="numero">Numero:</label>
        <input type="number" id="numero" name="number"> <br>
        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="brand"> <br>

        <button type="submit">Subir</button>
    </form>
</body>
</html>