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
                                <x-inputdl columna="4" nombre='frmalt_name' texto='Nombre' type='text' />
                                <x-inputdl columna="4" nombre='frmalt_price' texto='Costo' type='number' />
                                <x-inputdl columna="4" nombre='frmalt_qty' texto='Cantidad' type='number' />
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
                <x-alertadl color="danger" texto="Error Ingreso de Datos!!" mensaje="{{$message}}" />
            @enderror
            @error('frmalt_price')
                <x-alertadl color="danger" texto="Error Ingreso de Datos!!" mensaje="{{$message}}" />
            @enderror
            @error('frmalt_qty')
                <x-alertadl color="danger" texto="Error Ingreso de Datos!!" mensaje="{{$message}}" />
            @enderror

            {{-- Errores para Edición --}}
            @error('frm_name')
                <x-alertadl color="danger" texto="Error Edición de Datos!!" mensaje="{{$message}}" />
            @enderror
            @error('frm_price')
                <x-alertadl color="danger" texto="Error Edición de Datos!!" mensaje="{{$message}}" />
            @enderror
            @error('frm_qty')
                <x-alertadl color="danger" texto="Error Edición de Datos!!" mensaje="{{$message}}" />
            @enderror
        </div>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Costo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Fecha Alta</th>
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
                        <td>{{date("Y/m/d", strtotime($d_prod['created_at'])) }}</td>
                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#m_prdo{{$d_prod['id']}}">
                                Editar
                            </button>
                            <a href="{{route('u_prod.fn_delete',$d_prod['id'])}}">
                                <button type="button" class="btn btn-danger">
                                    Eliminar
                                </button>
                            </a>
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
                                        <x-inputdl columna="4" nombre='frm_name' texto='Nombre' type='text' valor="{{$d_prod['name']}}" />
                                        <x-inputdl columna="4" nombre='frm_price' texto='Costo' type='number' valor="{{$d_prod['price']}}" />
                                        <x-inputdl columna="4" nombre='frm_qty' texto='Cantidad' type='number' valor="{{$d_prod['qty']}}" />
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
