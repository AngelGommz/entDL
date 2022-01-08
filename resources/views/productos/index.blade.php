@extends('layouts.plantilla')

@section('titulo','Productos')

@section('contenido')
    <div class="col-md-10 offset-md-1 jumbotron mt-5 row">
        <div class="col-md-8">
            <h1 class="text-center">PRODUCTOS</h1>
        </div>
        <div class="col-md-4">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#exampleModal">
                ALTA PRODUCTOS
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Alta de productos.</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="POST" action="{{route('u_prod.alta')}}">
                            <div class="modal-body row">
                                @csrf
                                <div class="form-group col-md-4">
                                    <label for="name">Nombre</label>
                                    <input type="text" class="form-control" id="frmalt_name" name="frmalt_name" value="{{old('frmalt_name')}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Costo</label>
                                    <input type="number" class="form-control" id="frmalt_price" name="frmalt_price" value="{{old('frmalt_price')}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name">Cantidad</label>
                                    <input type="number" class="form-control" id="frmalt_qty" name="frmalt_qty" value="{{old('frmalt_qty')}}">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                <button type="submit" class="btn btn-primary">Agregar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            {{-- Errores para Alta --}}
            @error('frmalt_name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error Ingreso de Datos!!</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('frmalt_price')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error Ingreso de Datos!!</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('frmalt_qty')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error Ingreso de Datos!!</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror

            {{-- Errores para Edición --}}
            @error('frm_name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error Edición de Datos!!</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('frm_price')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error Edición de Datos!!</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
            @error('frm_qty')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error Edición de Datos!!</strong> {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @enderror
        </div>
        <table class="table mt-5">
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
                                <form method="post" action="{{route('u_prod.update')}}">
                                    @csrf
                                    @method('put')
                                    <div class="modal-body row">
                                        <div class="d-none">
                                            <input type="text" class="form-control" id="frm_id" name="frm_id" value="{{$d_prod['id']}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Nombre</label>
                                            <input type="text" class="form-control" id="frm_name" name="frm_name" value="{{$d_prod['name']}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Costo</label>
                                            <input type="text" class="form-control" id="frm_price" name="frm_price" value="{{$d_prod['price']}}">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Cantidad</label>
                                            <input type="text" class="form-control" id="frm_qty" name="frm_qty" value="{{$d_prod['qty']}}">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                                        <button type="submit" class="btn btn-primary">Guardar</button>
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
