@extends('layouts.internal')
@section('content')

<a href="{{route('proveedor.create')}}">Registrar Proveedor</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th> 
            <th>Correo</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableProveedor as $rowProveedor)
            <tr>
                <td>
                    <a href="{{route('proveedor.show', $rowProveedor->id)}}">{{$rowProveedor->name}} {{$rowProveedor->apellidoPa}}</a>
                </td>
                <td>{{$rowProveedor->email}}</td>

            </tr>
        @endforeach
    </tbody>
</table>

@endsection
