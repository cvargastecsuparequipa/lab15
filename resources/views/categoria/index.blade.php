@extends('layouts.plantillabase')
@section('contenido')
    CATEGORIAS
    <a href="categorias/create" type="button" class="btn btn-success">Nueva Categoria</a>
    <a href="categorias/export" type="button" class="btn btn-success">Reporte Excel</a>
    <a href="categorias/exportPdf" type="button" class="btn btn-danger">Reporte PDF</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Descripcion</th>
            <th scope="col">Stock</th>
            <th scope="col">Alias</th>
            <th scope="col">Estado</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>

        @foreach($categorias as $categoria )
            <tr>
                <td> {{$categoria->descripcion}}</td>
                <td> {{$categoria->stock}} </td>
                <td>{{$categoria->alias}}</td>
                <td>{{$categoria->estado}}</td>
                <td><a href="categorias/{{$categoria->_id}}/edit" type="button" class="btn btn-warning">Editar</a>
               <button type="button" class="btn btn-danger">Eliminar</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
