@extends('base._base')

@section('corpo')
    {!! Form::model($inicic, ['method' => 'PATCH', 'url' => 'iniciais/'.$inicic->id]) !!}
    @include('iniciais._form', ['btnCaption' =>'Salvar'])

@stop