@extends('layouts.internal')
@section('content')

<a href="{{route('roles.create')}}">Registrar Puesto</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Puesto</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableRoles as $rowRoles)
            <tr>
                <td>
                    <a href="{{route('roles.show', $rowRoles->id)}}">{{$rowRoles->nombre}}</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
