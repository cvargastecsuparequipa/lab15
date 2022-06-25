@extends('layouts.plantillabase')
@section('contenido')
<h2>NUEVA CATEGORIA</h2>
<form action="/categorias/insert" method="post">
    @csrf
    <div class="mb-3">
        <label  class="form-label">Descripcion</label>
        <input type=text" class="form-control" name="descripcion" >
    </div>
    <div class="mb-3">
        <label " class="form-label">Alias</label>
        <input type=text" class="form-control" name="alias" >
    </div>
    <div class="mb-3">
        <label  class="form-label">Stock</label>
        <input type=text" class="form-control" name="stock" >
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
