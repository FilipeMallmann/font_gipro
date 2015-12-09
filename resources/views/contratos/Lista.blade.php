@extends('base._base')
@section('corpo')
    <h1>Lista de contratos</h1>

    <table class="table table-striped">
        <thead>
        <tr>
            <th>Cliente</th>
            <th>Data/Hora</th>
            <th>Informações Gerais</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listadeContratos as $contrato)
            <tr>
                <td><a href={{ url('contratos/'.$contrato->id.'/edit') }}> {{ $contrato->cliente->nome }} </a></td>
                <td>{{ $contrato->created_at }}</td>
                <td>{{ $contrato->Tipo}}</td>
                <td>{{ $contrato->Descricao}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@stop
