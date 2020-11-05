@extends('layouts.internal')
@section('content')

<a href="{{ URL::to('compra') }}">Regresar</a> <br> <br>

<h1>Registro de Compra</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'compra')) }}
<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('name', 'Nombre del Producto') }}
        {{ Form::text('name', Request::old('name'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('costo', 'Costo del Producto Comprado') }}
        {{ Form::number('costo', Request::old('costo'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('fecha', 'Fecha de la Compra') }}
        {{ Form::date('fecha', Request::old('fecha'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>  

    <div class="form-group col-md-3">
        {{ Form::label('cproducto_id', 'Categoría del producto') }}
        {{ Form::select('cproducto_id', $tablecProductos, Request::old('cproducto_id'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_proveedor', 'Id del Proveedor') }}
        {{ Form::select('id_proveedor', $tableProveedor, Request::old('id_proveedor'),  
           array('class' => 'form-control')) }}
    </div>
    

    <div class="col-md-12">
        {{ Form::submit('Registrar Compra', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection