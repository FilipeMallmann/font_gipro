@extends('base._base')

@section('corpo')
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <h1> Montar petição inicial: <a href="{{ action('ClientesController@edit',$cliente->id) }}">{{ $cliente->nome }}</a></h1>
    <hr/>

    <ul class="nav nav-tabs nav-justified">
        <li class="active"><a data-toggle="tab" href="#tab-qualific" id="tab_0">Cabeçalho e Qualificação</a></li>
        <li><a data-toggle="tab" href="#menu1" id="tab_1">Pedidos e Requerimentos</a></li>
   {{--     <li><a data-toggle="tab" href="#menu2" id="tab_2">Finalização</a></li> --}}
        <li><a data-toggle="tab" href="#menu3" id="tab_3">Cálculos e Valores</a></li>

    </ul>

    <div class="tab-content">
        <div id="tab-qualific" class="tab-pane fade in active">

            <h3>Verifique os dados do cabeçalho da petição</h3>
            <hr>
            <div class="form-group">
                {!! Form::label('endereco','Endereçamento:') !!}
                {!! Form::text('endereco','EXCELENTÍSSIMO SENHOR(A) JUIZ(A) DA ____VARA DO TRABALHO DA COMARCA DE...',['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('endereco','Destaques no cabeçalho da petição:') !!}
                {!! Form::checkbox('ajg','AJG',null,['id' => 'ajg'])!!}
                {!! Form::label('ajg','AJG') !!}
                {!! Form::checkbox('prioridade','PRIORIDADE NA TRAMITAÇÃO',null,['id' => 'prioridade'])!!}
                {!! Form::label('prioridade','Prioridade de Tramitação') !!}
                {!! Form::checkbox('ritoordinario','RITO ORDINÁRIO',null,['id' => 'rordin'])!!}
                {!! Form::label('ritoordinario','Rito Ordinário') !!}
                {!! Form::checkbox('ritosumarissimo','RITO SUMARÍSSIMO',null,['id' => 'rsuma'])!!}
                {!! Form::label('ritosumarissimo','Rito Sumaríssimo') !!}

            </div>
            <div class="form-group">
                {!! Form::label('tipoacao','Tipo de Ação:') !!}
                {!! Form::text('tipoacao',null,['class' => 'form-control','placeholder' => 'Ex. reclamação Trabalhista' ]) !!}

            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    {!! Form::label('qualificacao','Qualicação do Autor:') !!}
                    {!!  Form::textarea('qualificacao', $cliente->Qualificacao , ['class' => 'form-control', 'placeholder' => 'Qualificação do cliente...', 'id' => 'qualif'])  !!}
                </div>
                <div class="form-group col-md-6">
                    {!! Form::label('qualificacaoReu','Qualicação do Réu:') !!}
                    {!!  Form::textarea('qualificacaoReu', $cliente->Qualific_Contraria, ['class' => 'form-control', 'placeholder' => 'Qualificação do réu...', 'id' => 'qual_reu'])  !!}
                </div>
            </div>
        </div>
        <div id="menu1" class="tab-pane fade">
            <h3>Escolhas os itens do pedido</h3>
            @include('iniciais.montagem',['controlador' => 'IniciaisController@montar_inicial','id_cli' =>$cliente->id ])
        </div>
        <div id="menu2" class="tab-pane fade">
            <h3>Finalizar</h3>

        </div>
        <div id="menu3" class="tab-pane fade">
            <h3>Cálculos para rito sumaríssimo</h3>
            Integração com planilha??
        </div>

    </div>

@stop

@section('script')


@stop