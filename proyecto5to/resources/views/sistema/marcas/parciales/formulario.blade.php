@if(session()->has('errors'))
 @foreach($errors->all() as $error)

 <label>{{$error}}</label>
 @endforeach
 @endif


<div class="form-group md-12">
    <strong>
{{Form::label('marca','Marca',['class'=>''])}}
    </strong>
{{Form::text('marca',null,
['class'=>'form-control','required','minlength=2', 'maxlength=20','placeholder'=>'Ingrese una Marca..'])}}
</div>
{{Form::submit('Guardar',['class'=>'btn btn-info'])}}
