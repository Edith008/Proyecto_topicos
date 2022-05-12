@extends('app')


@section('content')
<div class="container w-1 border p-4 mt-4">
    <a href="evento/create" class="btn btn-primary">CREAR</a>

    <table class="table table-dark table-striped mt-4">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Estado</th>
            <th scope="col">Categoria</th>
            <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>    
            @foreach ($eventos as $evento)
                <tr>
                    <td>{{$evento ->id}}</td>
                    <td>{{$evento ->Nombre}}</td>
                    <td>{{$evento ->Descripcion}}</td>
                    <td>{{$evento ->Estado}}</td>
                    <td>{{$evento ->Categoria}}</td>
                    <td>
                        <form action="{{ route ('evento.destroy',$evento->id)}}" method="POST">    
                        <a href="/evento/{{$evento ->id}}/edit" class="btn btn-info">EDITAR</a>  
                        @csrf
                        @method('DELETE')
                        <button type="sumit" class="btn btn-danger">BORRAR</button>
                        </form> 
                    </td>            
                </tr> 
            @endforeach
        </tbody>
    </table>

</div>

@stop