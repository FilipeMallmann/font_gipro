@extends('base._base')
@section('corpo')


    <h1> Editar cliente!</h1>

    <div class="div form-group col-md-2">
        <button class="btn btn-primary"  onclick=window.open("{{ url('contratos/'.$cliente->id) }}",'_parent')>Dados do Contrato</button>
    </div>
    <div class="form-group col-md-3">
        <button type="button" class="btn btn-default" onclick=window.open("{{ url('contratos/create/'.$cliente->id) }}",'_parent'); >Novo Contrato</button>
    </div>

    <div class="div form-group col-md-2">
        <button class="btn btn-primary" onclick=window.open("{{ url('/protocolos/'.$cliente->id) }}",'_parent')>Protocolos</button>
    </div>

    <div class="div form-group col-md-3">
        <button class="btn btn-default" onclick=window.open("{{ url('/protocolos/create/'.$cliente->id) }}",'_parent')>Novo Protocolo</button>
    </div>

    <div class="div form-group col-md-2">
        <button type="button" class="btn btn-info" onclick=window.open("{{action('IniciaisController@montar_inicial',$cliente->id)}}",'_parent')>Montar peça</button>
    </div>

    {!! Form::model($cliente, ['method' => 'PATCH', 'url' => 'cliente/'.$cliente->id]) !!}


    @include ('cliente._form',['btTxt' => 'Salvar'])

    {!! Form::close() !!}

    @include('errors.ver_erros')




@stop
