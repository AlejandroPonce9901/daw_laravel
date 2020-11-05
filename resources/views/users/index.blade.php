@extends('layouts.internal')
@section('content')

<a href="{{route('users.create')}}">Registrar Usuario</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Puesto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableUsers as $rowUser)
            <tr>
                <td>
                    <a href="{{route('users.show', $rowUser->id)}}">{{$rowUser->name}} {{$rowUser->apellidoPa}}</a>
                </td>
                <td>{{$rowUser->email}}</td>
                <td>@if($rowUser->getroles){{$rowUser->getroles->nombre}}@endif</td></tr>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
