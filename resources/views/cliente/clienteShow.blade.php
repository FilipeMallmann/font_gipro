@extends('base._base')


@section('corpo')

       <h2>NOME:</h2> <strong>{{ $cliente->nome }}</strong><br>
    <hr />
    <p><em>{!! $cliente->Andamento !!}</em></p>
    {{ dd($cliente) }}

@stop
