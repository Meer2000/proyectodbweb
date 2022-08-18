@extends('layouts.app')
@section('content')
<h5>listado de usuarios</h5>
<hr>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
            <th scope="col">ACCION</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
           <td>
               <form action="{{route('users.destroy',$user->id)}}" method="post">
                   @csrf
                   @method('DELETE')
                   <a class="btn btn-primary bg-success " href="{{route('users.show',$user->id)}}">Detalles</a>
                   <a class="btn btn-primary bg-info " href="{{route('users.edit',$user->id)}}" >Editar</a>
                   <button class="btn btn-primary bg-danger" type="submit" >Eliminar</button>
               </form>

           </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection
