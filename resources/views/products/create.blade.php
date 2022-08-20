<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="row">
    <div class="col-md-6 offset-3">
        <div class="card">
            <div class="card-body">
                <form action="{{route('products.store')}}" method="post">
                    @csrf
                    <h5 class="card-title">CREAR PRODUCTO</h5>
                    <p class="card-text"></p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control validate" placeholder="nombres" aria-label="name" name="nombres" required ></div>

                    <div class="input-group mb-3">
                        <input type="number" class="form-control validate" placeholder="precio" aria-label="password" name="precio" required>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control validate"  rows="3" placeholder="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control validate" placeholder="estado"  name="estado" required>
                    </div>


                    <div class="row">
                        <div class="col-10"> <button type="submit" class="btn btn-success">registrar</button>

                        </div>
                        <div class="col-2">
                            <a  href="{{route('products.index')}}" class="btn btn-warning">regresar</a>
                        </div>
                    </div>



                </form>
            </div>
        </div>
    </div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
