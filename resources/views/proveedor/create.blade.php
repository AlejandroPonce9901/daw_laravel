@extends('layouts.internal')
@section('content')

<a href="{{ URL::to('users') }}">Regresar</a> <br> <br>

<h1>Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'users')) }}
<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre') }}
        {{ Form::text('name', Request::old('name'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('apellidoPa', 'Apellido Paterno') }}
        {{ Form::text('apellidoPa', Request::old('apellidoPa'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('apellidoMa', 'Apellido Materno') }}
        {{ Form::text('apellidoMa', Request::old('apellidoMa'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('direccion', 'Domicilio') }}
        {{ Form::text('direccion', Request::old('direccion'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('telefono', 'Teléfono') }}
        {{ Form::number('telefono', Request::old('number'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('fechaNaci', 'Fecha de Nacimiento') }}
        {{ Form::date('fechaNaci', Request::old('fechaNaci'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>    

    <div class="form-group col-md-4">
        {{ Form::label('email', 'Correo electrónico') }}
        {{ Form::email('email', Request::old('email'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('password', 'Contraseña') }}
        {{ Form::text('password', Request::old('password'), array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('roles_id', 'Puesto') }}
        {{ Form::select('roles_id', $tableRoles, Request::old('roles_id'),  
           array('class' => 'form-control')) }}
    </div>
    

    <div class="col-md-12">
        {{ Form::submit('Registrar usuario', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection