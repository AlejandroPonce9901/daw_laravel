@extends('layouts.internal')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style= "text-align: center">{{ __('Hola') }} {{ Auth::user()->name }} {{ Auth::user()->apellidoPa }}</div>

                <div class="card-body" style= "text-align: center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Bienvenido a reGaming') }}<br>
                    <img src="{{asset('images/regaming.png')}}">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
