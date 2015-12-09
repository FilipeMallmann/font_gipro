@extends('base._base')

@section('corpo')


    <h1>Novo Cliente</h1>


    {!! Form::open(['url' => '/cliente']) !!}

    @include('cliente._form', ['btTxt' => 'Novo Cliente'])

    {!! Form::close() !!}

@include('errors.ver_erros')


@stop