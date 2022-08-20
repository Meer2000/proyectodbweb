@extends('layouts.guest')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <h5 class="card-title">REGISTRARSE</h5>
                            <p class="card-text">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control validate" placeholder="name"  name="name" required ></div></p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control validate" placeholder="email" name="email" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control validate" placeholder="password" name="password" required>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control validate" placeholder="phone" name="phone" required>
                            </div>
                            <div class="container col-md-6 offset-3">
                                <button type="submit" class="btn btn-success">registrarme</button>
                                <a href="{{'login'}}">autenticarme</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
