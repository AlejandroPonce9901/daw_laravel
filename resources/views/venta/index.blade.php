@extends('layouts.internal')
@section('content')

<a href="{{route('venta.create')}}">Registrar una venta</a> <br> <br>
@if(Session::has('message'))
      {{ Session::get('message') }} <br><br>
@endif
<table class="table table-striped">
    <thead>
        <tr>
            <th>Id de venta</th>
            <th>Fecha de venta</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tableVenta as $rowVenta)
            <tr>
                <td>
                    <a href="{{route('venta.show', $rowVenta->id)}}">{{$rowVenta->id}}</a>
                </td>
                <td>{{$rowVenta->fecha}}</td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection
