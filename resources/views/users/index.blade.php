@extends('layouts.app')
@section('content')
<h5>listado de usuarios</h5>
<hr>
<div class="table-responsive">
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th>ACCION</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>{{$user->phone}}</td>
           <td>
               <form  action="{{route('users.destroy',$user->id)}}" method="post">
                   @csrf
                   @method('DELETE')
                   <a class="btn  bg-success btn-sm " href="{{route('users.show',$user->id)}}">Detalles</a>
                   <a class="btn  bg-info btn-sm" href="{{route('users.edit',$user->id)}}" >Editar</a>
                   <button class="btn  bg-danger btn-sm" type="submit" >Eliminar</button>
               </form>

           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
