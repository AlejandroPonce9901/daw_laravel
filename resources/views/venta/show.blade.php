@extends('layouts.internal')
@section('content')

<a href="{{route('venta.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información de la venta</th>
            <th>
                {{ Form::open(array('url' => route('venta.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('venta.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> ID de la venta </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Fecha de la venta </td> <td>{{$modelo->fecha}}</td></tr>
            <tr><td> Costo del Producto </td> <td>{{$modelo->costo}}</td></tr>
            <tr><td> ID del Producto</td> <td>@if($modelo->getProducto){{$modelo->getProducto->id}}@endif</td></tr>
            <tr><td> ID del Cliente </td> <td>{{$modelo->getClientes->id}}</td></tr>
    </tbody>
</table>



@endsection