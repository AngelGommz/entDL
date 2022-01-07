@extends('layouts.plantilla')

@section('titulo','Login')

@section('contenido')
    <div class="jumbotron mt-5">
        <h1 class="display-4 text-center">DIGITALIFE</h1>
        <form action="{{route('u_prod.validate')}}" method="post">
            @csrf
            <div class="col-md-6 offset-md-3 row">
                <div class="col-md-6">
                    <label for="usuario">Usuario</label>
                    <input class="form-control" type="text" name="usuario">
                </div>
                <div class="col-md-6">
                    <label for="contrasena">Contaseña</label>
                    <input class="form-control" type="password" name="contrasena">
                </div>
                <button class="w-100 mt-5 btn btn-primary" type="submit">Ingresar</button>
            </div>
            
        </form>
    </div>
@endsection