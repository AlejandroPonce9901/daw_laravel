@extends('layouts.internal')
@section('content')

<a href="{{ URL::to('venta') }}">Regresar</a> <br> <br>

<h1>Registro de venta</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::open(array('url' => 'venta')) }}
<div class="row">

    <div class="form-group col-md-3">
        {{ Form::label('id_clientes', 'ID del Cliente') }}
        {{ Form::select('id_clientes', $tableClientes, Request::old('id_clientes'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_producto', 'Id del Producto') }}
        {{ Form::select('id_producto', $tableProveedor, Request::old('id_producto'),  
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

    
    

    <div class="col-md-12">
        {{ Form::submit('Registrar venta', array('class' => 'btn btn-primary')) }}
    </div>

</div>

{{ Form::close() }}


@endsection