@extends('layouts.internal')
@section('content')

<a href="{{ route('productos.show', $modelo->id) }}">Regresar</a> <br> <br>

<h1>Formulario de actualización</h1>

{{ HTML::ul($errors->all()) }}

{{ Form::model( $modelo, array('route' => array('productos.update', $modelo->id), 'method' => 'PUT') ) }}


<div class="row">

    <div class="form-group col-md-4">
        {{ Form::label('nombre', 'Nombre del producto') }}
        {{ Form::text('nombre', Request::old('nombre'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>
    
    <div class="form-group col-md-4">
        {{ Form::label('marca', 'Marca del Producto') }}
        {{ Form::text('marca', Request::old('marca'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('modelo', 'Modelo del Producto') }}
        {{ Form::text('modelo', Request::old('modelo'),
           array('class' => 'form-control', 'required'=>true, 'maxlength'=> 30)) }}
    </div>

    <div class="form-group col-md-12">
        {{ Form::label('descripcion', 'Descripción del producto') }} <br>
        {{ Form::textArea('descripcion', Request::old('descripcion'),
           array('class' => 'form-control', 'required'=>true, 
           'maxlength'=> 200, 'rows'=>2)) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('precio', 'Precio') }}
        {{ Form::number('precio', Request::old('precio'), 
           array('class' => 'form-control', 'required'=>true, 'step'=>'.01')) }}
    </div>

    <div class="form-group col-md-4">
        {{ Form::label('venta', 'Disponible para venta') }} <br>
        {{ Form::radio('venta', 1, (Request::old('venta') ? (Request::old('venta') == 1) : ($modelo->venta == 1)  ) , array('id'=>'radioSi', 'class'=>'', 'required'=>true)) }} Sí <br>
        {{ Form::radio('venta', 0, (Request::old('venta') ? (Request::old('venta') == 0) : ($modelo->venta == 0) ), array('id'=>'radioNo', 'class'=>'', 'required'=>true)) }} No
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('cproducto_id', 'Categoría del producto') }}
        {{ Form::select('cproducto_id', $tablecProductos, Request::old('cproducto_id'),  
           array('class' => 'form-control')) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('id_compra', 'Compra del Producto') }}
        {{ Form::select('id_compra', $tableCompra, Request::old('id_compra'),  
           array('class' => 'form-control')) }}
    </div>

</div>



    {{ Form::submit('Actualizar producto', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection