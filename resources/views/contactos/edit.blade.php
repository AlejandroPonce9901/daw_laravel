@extends('layouts.internal')
@section('content')

<a href="{{ route('contactos.show', $modelo->name) }}">Regresar</a> <br> <br>

<h1>Modificar un mensaje</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('contactos.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre del Aportador') }}
        {{ Form::text('name', Request::old('name'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('asunto', 'Asunto del Aportador') }}
        {{ Form::text('asunto', Request::old('asunto'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('mensaje', 'Mensaje del Aportador') }}
        {{ Form::text('mensaje', Request::old('mensaje'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo electrónico del Aportador') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('status', 'Mensaje Atendido') }} <br>
        {{ Form::radio('status', 1, (Request::old('status') ? (Request::old('status') == 1) : ($modelo->status == 1)  ) , array('id'=>'radioSi', 'class'=>'', 'required'=>true)) }} Sí <br>
        {{ Form::radio('status', 0, (Request::old('status') ? (Request::old('status') == 0) : ($modelo->status == 0) ), array('id'=>'radioNo', 'class'=>'', 'required'=>true)) }} No
    </div>

</div>

    {{ Form::submit('Actualizar el mensaje', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection