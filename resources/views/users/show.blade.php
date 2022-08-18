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
    <h5>VER DETALLES DE  {{$user->name}}</h5>
<table class="table table-striped">

    <tr><td>nombre</td>


        <td>{{$user->name}}</td>
    </tr>
    <tr><td>email</td>
        <td>{{$user->email}}</td>
    </tr>
    <tr><td>password</td>
        <td>{{$user->password}}</td>
    </tr>
    <tr>
        <td><a  href="{{route('users.index')}}" class="btn btn-success">regresar</a></td>

    </tr>


</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

