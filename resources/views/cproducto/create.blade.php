
@extends('layouts.internal')
@section('content')


<a href="{{ URL::to('productos') }}">Regresar</a> <br> <br>

<h1>Formulario de creación</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'cproducto')) }}

<div class="row">

<div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre Categoría del Producto') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('status', 'Estatus de Categoría') }} <br>
        {{ Form::radio('status', 1, (Request::old('status') == 1), ['id'=>'radioSi', 'class'=>'', 'required'=>true]) }} Sí <br>
        {{ Form::radio('status', 0, (Request::old('status') == 0), ['id'=>'radioNo', 'class'=>'', 'required'=>true]) }} No
    </div>

</div>

    {{ Form::submit('Registrar producto', ['class' => 'btn btn-primary'] ) }}

{{ Form::close() }}
@dump(Request::old('venta'))

@endsection
