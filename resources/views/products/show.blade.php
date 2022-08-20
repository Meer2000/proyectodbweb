<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h5>VER DETALLES DE  {{$product->nombres}}</h5>
    <table class="table table-striped">

        <tr>
            <td>nombres</td>
            <td>{{$product->nombres}}</td>
        </tr>
        <tr>
            <td>descripcion</td>
            <td>{{$product->descripcion}}</td>
        </tr>
        <tr>
            <td>precio</td>
            <td>{{$product->precio}}</td>
        </tr>
        <tr>
            <td>estado</td>
            <td>{{$product->estado}}</td>
        </tr>
        <tr>
            <td><a  href="{{route('products.index')}}" class="btn btn-success">regresar</a></td>

        </tr>


    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

