@extends('layouts.internal')
@section('content')

<a href="{{route('contactos.create')}}">Registrar Mensaje</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th> 
            <th>Correo</th>
            <th>Asunto</th>
            <th>Mensaje</th>
            <th>Estatus de atencion</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tablecontactos as $rowcontactos)
            <tr>
                <td>
                    <a href="{{route('contactos.show', $rowcontactos->id)}}">{{$rowcontactos->name}} </a>
                </td>
                <td>{{$rowcontactos->email}}</td>
                <td>{{$rowcontactos->asunto}}</td>
                <td>{{$rowcontactos->mensaje}}</td>
                <td>@if($rowcontactos->status) Sí @else No @endif</td>


            </tr>
        @endforeach
    </tbody>
</table>

@endsection
