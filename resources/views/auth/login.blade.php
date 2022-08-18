@extends('layouts.guest')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-6 offset-3">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <h5 class="card-title">INICIAR SESION</h5>
                            <p class="card-text"><div class="input-group mb-3">
                                <input type="email" class="form-control validate" placeholder="email" aria-label="email" name="email" required ></div></p>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control validate" placeholder="password" aria-label="password" name="password" required>
                            </div>
                            <div class="container col-md-6 offset-3">
                                <button type="submit" class="btn btn-success">iniciar</button>
                                <a href="{{'register'}}">registrarme</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

