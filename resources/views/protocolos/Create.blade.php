@extends('base._base')

@section('corpo')
   <h1> Novo protocolo:</h1>
   <div class="panel panel-default">
       <div class="panel-body">
           {{  $cliente->nome }}
       </div>
   </div>



   {!! Form::open(['url' => '/protocolos']) !!}

   {!! Form::hidden('cod_cli', $cliente->id) !!}

   @include('protocolos._form',['btnCaption' => 'Novo'])

   {!! Form::Close() !!}


@stop