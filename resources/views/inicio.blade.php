<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @csrf
    <div class="container text-center">
        <h1> Men&uacute; principal Aerolinea </h1>
        <br>
        <div class="d-flex justify-content-center">
        <a class="btn btn-primary mx-3" href="{{ route('tipos.asientos.inicio') }}"> Tipos de Asiento   </a>
        <a class="btn btn-primary mx-3" href="{{ route('vuelos.inicio') }}"> Vuelos </a>
        </div>
    </div>
    
</body>
</html>