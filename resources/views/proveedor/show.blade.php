@extends('layouts.internal')
@section('content')

<a href="{{route('users.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del usuario</th>
            <th>
                {{ Form::open(array('url' => route('users.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('users.edit', $modelo->id)}}">Editar</a>
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
            <tr><td> Domicilio </td> <td>{{$modelo->direccion}}</td></tr>
            <tr><td> Teléfono </td> <td>{{$modelo->telefono}}</td></tr>
            <tr><td> Fecha de Nacimiento </td> <td>{{$modelo->fechaNaci}}</td></tr>
            <tr><td> Email </td> <td>{{$modelo->email}}</td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
            <tr><td> Puesto </td> <td>@if($modelo->getroles){{$modelo->getroles->nombre}}@endif</td></tr>
    </tbody>
</table>



@endsection