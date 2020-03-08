@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Categoria</h3>
                </div>
                <div class="card-body">
<table>
    <thead>
        <tr>
        <th>Id</th>
        <th>Categoria</th>
        <th>Descripcion</th>
        </tr>
    </thead>
    <tbody>
               <!-- Esto es un comentario -->
        @foreach ($categorias as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->categoria}}</td>
            <td>{{$item->descripcion}}</td>


        </tr>
        @endforeach
    </tbody>
</table>

            </div>
            </div>
            </div>
            </div>
            </div>
@endsection
