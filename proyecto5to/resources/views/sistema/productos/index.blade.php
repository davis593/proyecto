@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3>Productos
                <a href="{{route('productos.create')}}" class="btn btn-primary pull-rigth">Nuevo</a>
                <h3>
                </div>
                <div class="card-body">
                    <table>
                         <thead>
                        <tr>
                            <th>Id</th>
                            <th>Marca_id</th>
                            <th>Categoria_id</th>
                            <th>Codigo</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Estado</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                            </tr>
                            </thead>
                    <tbody>
                <!-- Esto es un comentario -->
                @foreach ($productos as $item)
                <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->marca_id}}</td>
                        <td>{{$item->categoria_id}}</td>
                        <td>{{$item->codigo}}</td>
                        <td>{{$item->nombre}}</td>
                        <td>{{$item->descripcion}}</td>
                        <td>{{$item->estado}}</td>
                        <a href="{{route('productos.edit', $item->id)}}" class="btn btn-success">Editar</a>

                </td>
                <td>
                    <a href="{{route('productos.edit', $item->id)}}" class="btn btn-danger">Borrar</a>



                </td>
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
