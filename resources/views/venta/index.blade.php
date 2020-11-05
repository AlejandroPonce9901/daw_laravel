@extends('layouts.internal')
@section('content')

<a href="{{route('compra.create')}}">Registrar una Compra</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id de Compra</th>
            <th>Fecha de Compra</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableCompra as $rowCompra)
            <tr>
                <td>
                    <a href="{{route('compra.show', $rowCompra->id)}}">{{$rowCompra->id}}</a>
                </td>
                <td>{{$rowCompra->fecha}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
