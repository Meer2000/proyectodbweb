<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title')</title>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div class=" dropdown ">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    usuarios
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="{{route('users.create')}}">crear usuario</a></li>
                    <li><a class="dropdown-item" href="{{route('users.index')}}">listar usuarios</a></li>


                </ul>
            </div>
            <br>
            <div class=" dropdown ">
                <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    productos
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item " href="{{route('products.create')}}">crear producto</a></li>
                    <li><a class="dropdown-item" href="{{route('products.index')}}">listar productos</a></li>


                </ul>
            </div>
            <br>
            <div class=" dropdown ">
                <button class="btn btn-secondary  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    opciones
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li>
                        <a onclick="document.getElementById('cerrar').submit()" class="dropdown-item" href="#">cerrar sesion</a></li>



                </ul>
            </div>
            <form action="{{route('logout')}}" method="post" id="cerrar">
                @csrf
            </form>

        </div>

        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
