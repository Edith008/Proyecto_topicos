@extends('app')

@section('content')

<div class="container w-1 border p-4 mt-4">
    <h2 > CREAR EVENTOS</h2>
    <form action="/evento" method="POST">
        @csrf
        <div class="col-md-6">
            <label for="" class="form-label">Nombre</label>
            <input type="text" id="Nombre" name="Nombre" class="form-control" >
        </div>
        <div class="col-md-6">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" id="Descripcion" name="Descripcion" class="form-control" >
        </div>
        <div class="col-md-2">
            <label for="" class="form-label">Categoria</label>
            <select id="Categoria" name="Categoria" class="form-select">
            <option selected>concierto</option>
            <option>cine</option>
            <option>deportes</option>
            <option>conferencia</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="" class="form-label">Estado</label>
            <select id="Estado"  name="Estado" class="form-select">
            <option selected>oculto</option>
            <option>visible</option>
            </select>
        </div>

        <div class="mt-4">
        <a href="/evento"  class="btn btn-secondary">Cancelar</a>
        <button type="sumit" class="btn btn-primary">Guardar</button>
        </div>

    </form>

</div>
@endsection