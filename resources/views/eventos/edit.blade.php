@extends('app')

@section('content')


<div class="container w-1 border p-4 mt-4">
    <h2> EDITAR EVENTOS</h2>
        <form action="/evento/{{$Evento->id}}" method="POST">

            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="" class="form-label">Nombre</label>
                <input type="text" id="Nombre" name="Nombre" class="form-control" value="{{$Evento->Nombre}}">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Descripcion</label>
                <input type="text" id="Descripcion" name="Descripcion" class="form-control" value="{{$Evento->Descripcion}}" >
            </div>
            <div class="col-md-2">
                <label for="" class="form-label">Categoria</label>
                <select id="Categoria" name="Categoria" class="form-select" value="{{$Evento->Categoria}}">
                <option selected>concierto</option>
                <option>cine</option>
                <option>deportes</option>
                <option>conferencia</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="" class="form-label">Estado</label>
                <select id="Estado"  name="Estado" class="form-select" value="{{$Evento->Estado}}">
                <option selected>oculto</option>
                <option>visible</option>
                </select>
            </div>

            <div class="mt-4">
            <a href="/evento"  class="btn btn-secondary">Cancelar</a>
            <button  type="sumit" class="btn btn-primary">Guardar</button>
            </div>

        </form>

@stop