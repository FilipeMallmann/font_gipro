@extends('base._base')
@section('corpo')

    {!! \Illuminate\Html\HtmlFacade::script('https://api.trello.com/1/client.js?key='.Auth::user()->trellokey) !!}

    {!! \Illuminate\Html\HtmlFacade::script('js/trello.js') !!}
    <h1> Criar compromissos: {{ $cliente->nome }}</h1><hr/>


    <div class="row">
        <div class="form-group col-md-4">
            {!! Form::label('combotp', 'Escolha o tipo de compromisso:') !!}
            {!! Form::text('combotp',null,['class' =>'form-control', 'list' => 't_tipos']) !!}
            <datalist id="t_tipos">
                <option value="Perícia">
                <option value="INSS">
                <option value="Audiência">
                <option value="Outro">

            </datalist>
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('local', 'Diga o local do compromisso:') !!}
            {!! Form::text('local',null,['class' =>'form-control', 'placeholder' => 'Ex. 5º VT POA ou 2ª TR Canoas']) !!}
        </div>
        <div class="form-group col-md-4">
            {!! Form::label('datahora', 'Diga a data e hora do compromisso') !!}
            {!! Form::text('datahora',null,['class' =>'form-control' ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('descr', 'Descreva o compromisso:') !!}
            {!! Form::textarea('descr',null,['class' =>'form-control', 'rows' => '3' ]) !!}
        </div>
            <div class="form-group">
            <button class="btn btn-info" id="btntrello" >Enviar para Trello</button>
        </div>

    </div>

@stop
@section('script')
    <script LANGUAGE="JavaScript" TYPE="text/javascript">
        $(document).ready(function(){
            $('#btntrello').click(function(){
                // prepra as strings
                var titulo = window.nomeCli+' - '+combotp.value+' - '+datahora.value+' - '+local.value;
                criar_quadro(titulo, descr.value);
            });
        });
    </script>
@stop

