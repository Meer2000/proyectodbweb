
@extends('layouts.app')
@section('content')
    <h5>listado de Productos</h5>
    <hr>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>ESTADO</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->nombres}}</td>
                    <td>{{$product->descripcion}}</td>
                    <td>{{$product->precio}}</td>
                    <td>{{$product->estado}}</td>
                    <td>
                        <form  action="{{route('products.destroy',$product->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a class="btn  bg-success btn-sm " href="{{route('products.show',$product->id)}}">Detalles</a>
                            <a class="btn  bg-info btn-sm" href="{{route('products.edit',$product->id)}}" >Editar</a>
                            <button class="btn  bg-danger btn-sm" type="submit" >Eliminar</button>
                        </form>

                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
