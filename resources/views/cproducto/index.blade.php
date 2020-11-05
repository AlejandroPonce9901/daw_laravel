@extends('layouts.internal')
@section('content')

<a href="{{route('cproducto.create')}}">Registrar categoría producto</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableCproducto as $rowCproducto)
            <tr>
                <td>
                    <a href="{{route('cproducto.show', $rowCproducto->id)}}">{{$rowCproducto->nombre}}</a>
                </td>
                <td>@if($rowCproducto->status) Sí @else No @endif</td>
    
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
