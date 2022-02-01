@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
    <h1>Editer</h1>
@stop

@section('content')
   <form action="/articulos/{{$articulo->id}}" method="POST">
   @csrf
   @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Quantite</label>
    <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Produit</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Sortie</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Prix</label>
    <input id="precio" name="precio" type="number" step="any" class="form-control" value="{{$articulo->precio}}">
  </div>
  <a href="/articulos" class="btn btn-secondary">Fermer</a>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
