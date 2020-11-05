@extends('layouts.internal')
@section('content')

<a href="{{route('compra.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información de la compra</th>
            <th>
                {{ Form::open(array('url' => route('compra.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('compra.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Id de la Compra </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Nombre del Producto Comprado </td> <td>{{$modelo->name}}</td></tr>
            <tr><td> Fecha de la Compra </td> <td>{{$modelo->fecha}}</td></tr>
            <tr><td> Costo del Producto </td> <td>{{$modelo->costo}}</td></tr>
            <tr><td> Proveedor </td> <td>@if($modelo->getProveedor){{$modelo->getProveedor->nombre}}@endif</td></tr>
            <tr><td> Categoría del Producto </td> <td>{{$modelo->getcProducto->nombre}}</td></tr>
    </tbody>
</table>



@endsection