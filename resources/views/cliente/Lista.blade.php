@extends('base._base')


@section('corpo')


    <h1>Listagem dos Clientes</h1>
    <div class="form-group col-md-3">
        <button type="button" class="btn btn-info" onclick=window.open("{{ action('ClientesController@create') }}",'_parent'); >Cadastrar Cliente</button>
    </div>
    {!! Form::open(['action' => 'ClientesController@index', 'method' => 'GET', 'class' => 'Class_name']) !!}
    <div class="input-group col-md-offset-7 col-md-5 ">
        {!!  Form::text('q',null,['class' => 'form-control', 'type' =>'text', 'placeholder' =>$filtro, 'autofocus'])!!}
         <span class="input-group-btn btn-default"><button type ="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></span>
    </div>
    {!! Form::Close() !!}
    <hr/>

   <table class="table table-striped">
       <thead>
       <tr>
           <th>Nome do Cliente</th>
       </tr>
       </thead>
            <tbody>
                @foreach($listadeCLientes as $cli)
                 <tr>
                    <td><a href="{{ action('ClientesController@edit', $cli->id) }}">  {{$cli->nome }} </a></td>
                    <td align="right"><div class="btn-group btn-group-xs">
                            <button class="btn btn-info" onclick=window.open("{{action('ProtocolosController@novo', $cli->id)}}",'_parent'); >Novo Protocolo</button>
                            <button class="btn btn-warning" onclick=window.open("{{ action('ProtocolosController@show',$cli->id) }}",'_parent'); >Ver Protocolos</button>
                            <button class="btn btn-info" onclick=window.open("{{action('ContratosController@show',$cli->id)}}",'_parent'); >Contrato</button>
                            <button class="btn btn-warning" onclick=window.open("{{action('IniciaisController@montar_inicial',$cli->id)}}",'_parent'); >Fazer inicial</button>
                            <button class="btn btn-info" onclick=window.open("{{action('MainController@carregar_trello',$cli->id)}}",'_parent'); >Compromissos</button>

                        </div>

                    </td>
                     @endforeach
                 </tr>
            </tbody>
   </table>
    @include('base._paginat')
@stop

