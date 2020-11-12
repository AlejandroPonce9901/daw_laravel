@extends('layouts.internal')
@section('content')

<a href="{{route('clientes.create')}}">Registrar Cliente</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th> 
            <th>Correo</th>
            <th>ID Cliente</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableClientes as $rowClientes)
            <tr>
                <td>
                    <a href="{{route('clientes.show', $rowClientes->id)}}">{{$rowClientes->name}} {{$rowClientes->apellidoPa}}</a>
                </td>
                <td>{{$rowClientes->email}}</td>
                <td>{{$rowClientes->id}}</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
