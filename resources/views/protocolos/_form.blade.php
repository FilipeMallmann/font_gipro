<div class="row">
    <div class="form-group col-md-3" >
        {!! Form::label('Tipo', 'Tipo:') !!}
        {!! Form::text('Tipo', null,['class' => 'form-control', 'list' => 't_proc']) !!}
        <datalist id="t_proc">
            <option value="Entrada">
            <option value="Saída">
        </datalist>
    </div>
    <div class="col-md-9">
    </div>
</div>

<div class="form-group">
    {!! Form::label('Docs', "Descrição dos Documentos:") !!}
    {!! Form::textarea('Docs', null,['class' => 'form-control', 'rows' => '18']) !!}
</div>

<div class="form-group">
    {!! Form::submit($btnCaption,['class' => 'btn btn-default']) !!}
</div>

@include('errors.ver_erros')
