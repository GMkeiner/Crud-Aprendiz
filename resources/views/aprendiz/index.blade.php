@extends('home')

@section('content')

<div class="row">
    <div class="col-md-2"></div>
        <div class="col-md-8">
            <br><br>
            <h3>LISTA DE CLIENTES</h3>
            <br>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
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
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('aprendiz.create')
    </div>
</div>
            