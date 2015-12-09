@extends('base._base')
@section('corpo')
        <h1>Editar contrato</h1>
        <div class="panel panel-default">
                <div class="panel-body">
                        {{ $contr->cliente->nome }}
                </div>
        </div>

        {!! Form::model($contr, ['method' => 'PATCH', 'url' => 'contratos/'.$contr->id]) !!}
        {!! Form::hidden('cod_cli', $contr->cod_cli) !!}
        @include('contratos._form',['btnCaption' =>'Salvar'])
        {!! Form::Close() !!}
@stop
