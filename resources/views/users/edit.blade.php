@extends('layouts.app')
@section('content')
    <h5>ACTUALIZAR PERFIL DE {{$user->name}}</h5>
    <form action="{{route('users.update',$user->id)}}" class="form-control" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label" >name</label>
            <input type="text" class="form-control" id="nombre" name="name" value="{{$user->name}}">

        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="email" value="{{$user->email}}">

        </div>

        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="text" class="form-control" name="password" value="{{$user->password}}">

        </div>
        <div class="mb-3">
            <label for="password" class="form-label">password</label>
            <input type="text" class="form-control" name="phone" value="{{$user->phone}}">

        </div>
        <button type="submit" class="btn btn-primary" >Editar</button>

    </form>



@endsection

