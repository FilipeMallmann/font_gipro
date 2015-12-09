<div class="row">
    <div class="col-md-6">
        <h3>Dados do Contrato</h3>
        <hr />


        <div class="form-group">
    {!! Form::textarea('Descricao',null,['class' => 'form-control', 'row' =>'4']) !!}
</div>
<div class="form-group col-md-6">
    {!! Form::label('origem','Origem do cliente') !!}
    {!! Form::text('origem', null,['class' => 'form-control', 'list' => 'l_origem']) !!}
    <datalist id="l_origem">
        <option value="Indicação">
        <option value="Testemunhas">
        <option value="Parceiro">
        <option value="Outra">
    </datalist>
</div><!-- /btn-group -->

<div class="col-md-10">
    {!! Form::hidden('Encaminhado',0) !!} {{--Chucrute para fazer o chek funcionar na marra! --}}
    <label> {!! Form::checkbox('Encaminhado',1) !!} Encaminhado para algum parceiro? </label>
        {{-- <label><input type="checkbox" nome="Encaminhado" id="Encaminhado"> Encaminhado para algum parceiro?</label> --}}
</div>

<div class="form-group col-md-7">
    {!! Form::label('qual','Qual?') !!}
    {!! Form::text('Encaminhado_para', null,['class' => 'form-control']) !!}
</div>

</div>

<div class="col-md-6">
    <h3>Finalização do Contrato</h3>
    <hr />

    <div class="form-group col-md-6">
        <label for="_tipo_proc">Como terminou o processo?</label>
        {!! Form::text('Finalizado_como', null,['class' => 'form-control', 'list' => 'l_fim']) !!}
        <datalist id="l_fim">
            <option value="Procedente">
            <option value="Parcialmente Procedente">
            <option value="Acordo">
            <option value="Improcedente">
            <option value="Outro - ">
        </datalist>
    </div>
    <div class="col-md-10">
        {!! Form::hidden('Finalizado',0) !!}
        <label>{!! Form::checkbox('Finalizado',1) !!} Finalizado ? </label>
    </div>
    <div class="form-group col-md-6">
        {!! Form::label('valor','Valor total do Contrato:') !!}
        {!! Form::text('Valor_Total', null,['class' => 'form-control']) !!}
    </div>

</div>
</div>

<div class="form-group">
    {!! Form::submit($btnCaption,['class' => 'btn btn-default']) !!}
</div>

@include('errors.ver_erros')


