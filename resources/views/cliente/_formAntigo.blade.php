<div class="form-group">
    {!! Form::label('nome', "Nome:") !!}
    {!! Form::text('nome', null,['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('fone', "Telefone:") !!}
    {!! Form::text('fone', null,['class' => 'form-control ']) !!}
</div>
<div class="form-group">
    {!! Form::label('TipoProcesso', "Tipode de Processo:") !!}
    {!! Form::text('TipoProcesso', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Andamento', "Andamento:") !!}
    {!! Form::textarea('Andamento', null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($btTxt,['class' => 'btn btn-default']) !!}
</div>