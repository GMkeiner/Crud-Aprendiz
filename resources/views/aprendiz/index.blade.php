@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>LISTA DE APRENDICES</h3>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
                Nuevo
            </button>            
            <div class="table-responsive">
                <br>
                <table class="table">
                    <thead class="bg-dark text-white">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">CEDULA</th>
                            <th scope="col">NOMBRE</th>
                            <th scope="col">APELLIDO</th>
                            <th scope="col">CORREO</th>
                            <th scope="col">TELEFONO</th>
                            <th scope="col">ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($aprendiz as $aprendiz)
                        <tr class="">
                            <td scope="row">{{$aprendiz->id}}</td>
                            <td>{{$aprendiz->cedula}}</td>
                            <td>{{$aprendiz->nombre}}</td>
                            <td>{{$aprendiz->apellido}}</td>
                            <td>{{$aprendiz->correo}}</td>
                            <td>{{$aprendiz->telefono}}</td>
                            <td>
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$aprendiz->id}}">
                                    Editar
                                </button>  <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$aprendiz->id}}">
                                    Eliminar
                                </button>  
                            </td>
                        </tr>
                        @include('aprendiz.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('aprendiz.create')
    </div>
</div>
            