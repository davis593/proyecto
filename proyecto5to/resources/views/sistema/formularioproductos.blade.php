        @extends('plantilla')
        @section('contenido')

        <label> Bienvenido </label>
        <br>


        {!! Form::open(['method'=> 'POST']) !!}
        <div class='form-group'>
        {!! Form::label('name','Marca_id:')!!}
        {!! Form::text ('name',null,['class'=>'form-control'])!!}
        {!! Form::label('name','Categoria_id')!!}
        {!! Form::text ('name',null,['class'=>'form-control'])!!}
        {!! Form::label('name','Codigo')!!}
        {!! Form::text ('name',null,['class'=>'form-control'])!!}
        {!! Form::label('name','Nombre')!!}
        {!! Form::text ('name',null,['class'=>'form-control'])!!}
        {!! Form::label('name','Descripcion')!!}
        {!! Form::text ('name',null,['class'=>'form-control'])!!}
        {!! Form::label('name','Estado')!!}
        {!! Form::text ('name',null,['class'=>'form-control'])!!}

        {!! Form::submit ('Guardar',['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

        @endsection
