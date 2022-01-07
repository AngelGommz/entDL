@extends('layouts.plantilla')

@section('titulo','Productos')

@section('contenido')
    <div class="col-md-8 offset-md-2 jumbotron mt-5">
        <h1 class="text-center">PRODUCTOS</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($c_prod as $d_prod)
                    <tr>
                        <th scope="row">{{$d_prod['id']}}</th>
                        <td>{{$d_prod['name']}}</td>
                        <td>${{$d_prod['price']}}</td>
                        <td>{{$d_prod['qty']}}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_prdo{{$d_prod['id']}}">
                                Editar
                            </button>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class="modal fade" id="m_prdo{{$d_prod['id']}}" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Editar {{$d_prod['name']}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="">
                                    <div class="modal-body row">
                                        <div class="form-group col-md-4">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" id="name" name="name" value="{{$d_prod['name']}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Costo</label>
                                            <input type="text" class="form-control" id="costo" name="costo" value="{{$d_prod['price']}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Cantidad</label>
                                            <input type="text" class="form-control" id="cantidad" name="cantidad" value="{{$d_prod['qty']}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                        <button type="button" class="btn btn-primary">Guardar</button>
                                    </div>
                                </form>                                
                            </div>
                        </div>
                    </div>
                @endforeach            
            </tbody>
        </table>
        {{$c_prod->links();}}
    </div>

@endsection
