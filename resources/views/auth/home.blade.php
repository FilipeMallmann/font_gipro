@extends('base._base')
@section('corpo')
<h1>Home -  Bem vindo {{ Auth::User()->name }}</h1>
    <hr>
    {!! Form::model($usuario, ['method' => 'PATCH', 'url' => '/home/save']) !!}
    <div class="form-group">


        {!! Form::label('trellokey', 'Chave do Trello - As chaves podem ser contradas em ') !!}
        {!! Html::link('https://trello.com/app-key','https://trello.com/app-key') !!}
        {!! Form::text('trellokey', null,['class' => 'form-control', 'placeholder' => 'Chave da API do trello']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Salvar Chave', ['class' => 'btn btn-default']) !!}
    </div>
    {!! Form::close() !!}
@stop