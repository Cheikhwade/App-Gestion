@extends('adminlte::page')

@section('title', 'CRUD con Laravel 8')

@section('content_header')
   <h1>Ajouter un produit</h1>
@stop

@section('content')

<form action="/articulos" method="POST">
  @csrf
  <div class="mb-3">
    <label for="" class="form-label">Produit</label>
    <input id="descripcion" name="descripcion" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Quantite</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindex="1">
  </div>

  <div class="mb-3">
    <label for="" class="form-label">sortie</label>
    <input id="cantidad" name="cantidad" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Prix</label>
    <input id="precio" name="precio" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="/articulos" class="btn btn-secondary" tabindex="5">Fermer</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Enregistrer</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
