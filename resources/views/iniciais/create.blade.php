@extends('base._base')

@section('corpo')
    <h1>Novo Modelo de Inicial</h1>
    <hr/>

    {!! Form::open(['url' => '/iniciais']) !!}
    @include('iniciais._form', ['btnCaption' =>'Novo Modelo'])


@stop