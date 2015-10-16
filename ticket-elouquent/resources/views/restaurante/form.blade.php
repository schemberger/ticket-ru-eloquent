@extends('layout.master')

@section('content')

    <div class="pull-left">
        <a href="{{ url('restaurante/lista') }}" class="btn btn-primary btn-lg" role="button">Voltar</a>
    </div>

    {!! Form::open(array('url' => 'restaurante', 'class'=>'form-horizontal')) !!}

    <fieldset>

        <div class="form-group">
            {!! Form::label('nm_unidade', 'Nome', ['class'=>'col-sm-2 control-label']) !!}
            <div class="col-sm-10">
                {!! Form::text('nm_unidade', null, ['placeholder'=>'Digite o nome do Restaurante', 'class'=>'form-control']) !!}
            </div>
        </div>

        <br/>

        <div class="form-group">
            {!! Form::submit('Enviar', ['class'=>'col-sm-2 col-sm-offset-2 btn btn-default']) !!}
        </div>
    </fieldset>

    {!! Form::close() !!}

@stop