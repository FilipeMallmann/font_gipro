@extends('base._base')

@section('corpo')

    <h1>Lista de iniciais</h1>
    <hr/>
    <div class="form-group">
        <button type="button" class="btn btn-default" onclick=window.open("{{action('IniciaisController@create')}}",'_parent')>Cadastrar novo modelo</button>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Referência</th>
                <th>Tópico</th>
                <th>Rodapé</th>
            </tr>
        </thead>
        <tbody>
        @foreach($listaIniciais as $inic)
            <tr>
                <td><a href="{{ action('IniciaisController@edit',$inic->id) }}"> {{ $inic->Referencia}}</a></td>
                <td>{{\Illuminate\Support\Str::limit($inic->Corpo, 200) }}</td>
                <td>{{\Illuminate\Support\Str::limit($inic->Pedidos) }}</td>

            </tr>
        @endforeach
        </tbody>
    </table>
    @include('base._paginat')
@stop