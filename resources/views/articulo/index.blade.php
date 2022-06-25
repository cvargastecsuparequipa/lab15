@extends('layouts.plantillabase')
@section('contenido')
    ARTICULOS
    <a href="articulos/create" type="button" class="btn btn-success">Nuevo Articulo</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Descripcion</th>
            <th scope="col">Estado</th>
            <th scope="col">Categoria</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articulos as $articulo )
            <tr>
                <td> {{$articulo->descripcion}}</td>
                <td> {{$articulo->estado ? 'ACTIVO':'INACTIVO'}}</td>
                <td> {{$articulo->categorias->descripcion}}</td>
            </tr>
        @endforeach

        </tbody>
    </table>
@endsection
