<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Correo electronico</h1>
    <p>este es el primer correo por laravel</p>

    <p><strong>Nombre: </strong>{{$contacto['nombre']}}</p>
    <p><strong>Correo: </strong>{{$contacto['correo']}}</p>
    <p><strong>Mensaje: </strong>{{$contacto['mensaje']}}</p>
</body>
</html>