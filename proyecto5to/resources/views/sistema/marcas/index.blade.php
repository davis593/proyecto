@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3>Marcas
                <a href="{{route('marcas.create')}}" class="btn btn-primary pull-rigth">Nuevo</a>
                <h3>
                </div>
                <div class="card-body">
                    <table>
                         <thead>
                        <tr>
                         <th>Id</th>
                        <th>Marca</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                        </tr>
                        </thead>
                    <tbody>
                <!-- Esto es un comentario -->
                @foreach ($marcas as $item)
                <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->marca}}</td>
                        <td>
                        <a href="{{route('marcas.edit', $item->id)}}" class="btn btn-success">Editar</a>

                </td>
                <td>
                    <form method="post" action="{{url('/marcas/'.$item->id)}}">

                        <button type="submit" onclick="return confirm('Deseas borrar');"class="  btn btn-danger">Borrar</button>
                        {{csrf_field()}}
                        {{method_field('DELETE')}}

                    </form>

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
