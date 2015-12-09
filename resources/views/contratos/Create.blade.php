@extends('base._base')

@section('corpo')

<h1>Novo contrato: {{ $cliente->nome }}</h1>

        {!! Form::open(['url' => '/contratos']) !!}
        {!! Form::hidden('cod_cli', $cliente->id) !!}
        @include('contratos._form',['btnCaption' =>'Novo Contrato'])
        {!! Form::Close() !!}


@stop
