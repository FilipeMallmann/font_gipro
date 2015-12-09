<div class="form-group ">
    {!! Form::label('Referencia', 'Referência:') !!}
    {!! Form::text('Referencia', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group ">
    {!! Form::label('Tipo', 'Tipo de Pedido:') !!}
    {!! Form::text('Tipo', null, ['class'=>'form-control', 'placeholder' => 'Ex. Trabalhista ou Previdenciária...']) !!}
</div>
<div class="form-group ">
    {!! Form::label('Titulo', 'Título do pedido') !!}
    {!! Form::text('Titulo', null, ['class'=>'form-control', 'placeholder' => 'Ex. DA HORA EXTRA ou DO DANO MORAL']) !!}
</div>
<div class="form-group ">
    {!! Form::label('Corpo', 'Tópico:') !!}
    {!! Form::textarea('Corpo', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group ">
    {!! Form::label('Pedidos', 'Pedidos e requerimentos:') !!}
    {!! Form::textarea('Pedidos', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group ">
    {!! Form::submit($btnCaption, ['class'=>'btn btn-default']) !!}
</div>
{!! Form::close() !!}
    @include('errors.ver_erros')


