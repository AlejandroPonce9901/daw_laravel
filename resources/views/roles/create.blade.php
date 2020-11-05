
@extends('layouts.internal')
@section('content')


<a href="{{ URL::to('roles') }}">Regresar</a> <br> <br>

<h1>Crear un nuevo Puesto</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'roles')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del Puesto') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

</div>

    {{ Form::submit('Registrar rol', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}

@endsection
