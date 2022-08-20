@extends('layouts.app')
@section('content')
    <h5>ACTUALIZAR Producto : {{$product->nombres}}</h5>
    <form action="{{route('products.update',$product->id)}}" class="form-control" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label" >nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="{{$product->nombres}}">

        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">descripcion</label>
            <textarea type="text" class="form-control" id="descripcion"  name="descripcion" rows="3">{{$product->descripcion}}</textarea>

        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">precio</label>
            <input type="number" id="precio" class="form-control" name="precio" value="{{$product->precio}}">

        </div>
        <div class="mb-3">
            <label for="estaddo" class="form-label">estado</label>
            <input type="text" class="form-control" id="estado" name="estado" value="{{$product->estado}}">

        </div>
        <button type="submit" class="btn btn-primary" >Editar</button>

    </form>



@endsection
