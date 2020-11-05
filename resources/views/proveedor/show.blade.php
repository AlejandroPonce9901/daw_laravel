@extends('layouts.internal')
@section('content')

<a href="{{route('proveedor.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del proveedor</th>
            <th>
                {{ Form::open(array('url' => route('proveedor.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('proveedor.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> Nombre </td> <td>{{$modelo->name}}</td></tr>
            <tr><td> Apellido Paterno </td> <td>{{$modelo->apellidoPa}}</td></tr>
            <tr><td> Apellido Materno </td> <td>{{$modelo->apellidoMa}}</td></tr>
            <tr><td> Empresa </td> <td>{{$modelo->empresa}}</td></tr>
            <tr><td> Teléfono </td> <td>{{$modelo->telefono}}</td></tr>
            <tr><td> RFC </td> <td>{{$modelo->rfc}}</td></tr>
            <tr><td> Email </td> <td>{{$modelo->email}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>
</table>



@endsection