@extends('layout.master')

@section('content')

    <div class="container-fluid">
        @foreach($unidades as $un)
            <a href="{{ url('') }}" class="btn btn-primary btn-lg btn-block" role="button">{{$un->nm_unidade}}</a><br>
        @endforeach
    </div>

    <div class="container-fluid">
        <a class="btn btn-default btn-danger btn-lg" href="{{ url('restaurante/lista') }}" role="button">Alteracoes</a>
    </div>
@stop
