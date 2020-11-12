@extends('layouts.internal')
@section('content')

<a href="{{ route('venta.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Modificar Venta</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('venta.update', $modelo->id), 'method' => 'PUT') ) }}

<div class="row">

    <div class="form-group col-md-3">
        {{ Form::label('id_clientes', 'ID del Cliente') }}
        {{ Form::select('id_clientes', $tableClientes, Request::old('id_clientes'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_producto', 'Id del Producto') }}
        {{ Form::select('id_producto', $tableProducto, Request::old('id_producto'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('costo', 'Costo del Producto ventado') }}
        {{ Form::number('costo', Request::old('costo'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('fecha', 'Fecha de la venta') }}
        {{ Form::date('fecha', Request::old('fecha'), 
           array('class' => 'form-control', 'required'=>true)) }}
    </div>  

    
    

    

</div>

    {{ Form::submit('Actualizar venta', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection