@extends('layouts.internal')
@section('content')

<a href="{{ route('cproducto.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('cproducto.update', $modelo->id), 'method' => 'PUT') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre de Categoría') }}
        {{ Form::text('nombre', null, 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('status', 'Estatus de Categoría') }} <br>
        {{ Form::radio('status', 1, (Request::old('status') ? (Request::old('status') == 1) : ($modelo->status == 1)  ) , array('id'=>'radioSi', 'class'=>'', 'required'=>true)) }} Sí <br>
        {{ Form::radio('status', 0, (Request::old('status') ? (Request::old('status') == 0) : ($modelo->status == 0) ), array('id'=>'radioNo', 'class'=>'', 'required'=>true)) }} No
    </div>

</div>


    {{ Form::submit('Actualizar categoría de producto', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection