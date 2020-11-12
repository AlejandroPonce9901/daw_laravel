@extends('layouts.internal')
@section('content')

<a href="{{ URL::to('contactos') }}">Regresar</a> <br> <br>

<h1>Registrar un nuevo Mensaje <h5>Con el fin de mejorar nuestro servicio, otorgando seguridad y 
lealtad al cliente</h5></h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'contactos')) }}
<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre del Aportador') }}
        {{ Form::text('name', Request::old('name'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('asunto', 'Asunto (Queja, critica negativa y/o positiva)') }}
        {{ Form::text('asunto', Request::old('asunto'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('mensaje', 'Mensaje del Aportador') }}
        {{ Form::text('mensaje', Request::old('mensaje'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>


    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo Electrónico del Aportador') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

  <div class="form-group col-md-3">
        {{ Form::label('status', 'Estado de Mensaje Atendido') }} <br>
        {{ Form::radio('status', 1, (Request::old('status') == 1), ['id'=>'radioSi', 'class'=>'', 'required'=>true]) }} Sí <br>
        {{ Form::radio('status', 0, (Request::old('status') == 0), ['id'=>'radioNo', 'class'=>'', 'required'=>true]) }} No
    </div>

    <div class="col-md-12">
        {{ Form::submit('Registrar Nuevo Mensaje', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection