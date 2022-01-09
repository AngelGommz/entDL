@extends('layouts.plantilla')

@section('titulo','Login')

@section('contenido')
    <div class="jumbotron mt-5">
        <h1 class="display-4 text-center">DIGITALIFE</h1>
        <form action="{{route('inicio.login')}}" method="post">
            @csrf
            <div class="col-md-6 offset-md-3 row">
                <x-inputdl columna="6" nombre='usuario' texto='Usuario' type='text' />
                <x-inputdl columna="6" nombre='contrasena' texto='Contaseña' type='password' />
                <button class="w-100 mt-5 btn btn-primary" type="submit">Ingresar</button>
            </div>
            
        </form>
    </div>
@endsection