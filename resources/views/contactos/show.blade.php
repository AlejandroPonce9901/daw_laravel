@extends('layouts.internal')
@section('content')

<a href="{{route('contactos.index')}}">Inicio</a> <br><br>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Información del Mensaje del Cliente</th>
            <th>
                {{ Form::open(array('url' => route('contactos.destroy', $modelo->id), 'class' => '')) }}
                    <a class="btn btn-primary pull-left" href="{{route('contactos.edit', $modelo->id)}}">Editar</a>
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Borrar', array('class' => 'btn btn-danger')) }}
                {{ Form::close() }}
            </th>
        </tr>
    </thead>
    <tbody>
            <tr><td> ID </td> <td>{{$modelo->id}}</td></tr>
            <tr><td> Nombre del Aportador</td> <td>{{$modelo->name}}</td></tr>
            <tr><td> Asunto (Queja, critica negativa y/o positiva)</td> <td>{{$modelo->asunto}}</td></tr>
            <tr><td> Mensaje del Aportador </td> <td>{{$modelo->mensaje}}</td></tr>
            <tr><td> Email del Aportador </td> <td>{{$modelo->email}}</td></tr>
            <tr><td> Mensaje atendido </td> <td> @if($modelo->status) Sí @else No @endif </td></tr>
            <tr><td> Fecha de registro </td> <td>{{$modelo->created_at}}</td></tr>
            <tr><td> Fecha de modificación </td> <td>{{$modelo->updated_at}}</td></tr>
    </tbody>
</table>



@endsection