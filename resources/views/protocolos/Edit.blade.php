@extends('base._base')

@section('corpo')
    <h1> Editar Protocolo:</h1>
    <div class="panel panel-default">
        <div class="panel-body">
            {{ $prot->cliente->nome }}
        </div>
    </div>

<!-- ok inicio do modelo -->
    {!! Form::model($prot, ['method' => 'PATCH', 'url' => 'protocolos/'.$prot->id]) !!}

    {!! Form::hidden('cod_cli', $prot->cod_cli) !!}
    @include('protocolos._form',['btnCaption' => 'Salvar Alterações'] )
<!-- antes do close -->

    {!! Form::Close() !!}

@stop
