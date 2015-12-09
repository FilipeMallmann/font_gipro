@extends('base._base')

@section('corpo')
    lista de protocolos
    <hr/>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Cliente</th>
            <th>Data/Hora</th>
            <th>Tipo</th>
            <th>Documentos</th>
        </tr>
        </thead>
        <tbody>
        @foreach($listadeProtocolos as $prot)
            <tr>
                <td><a href={{ url('protocolos/'.$prot->id.'/edit') }}> {{ $prot->cliente->nome }} </a></td>
                <td>{{ date('d/m/Y H:i:s', strtotime($prot->created_at)) }}</td>
                <td>{{ $prot->Tipo}}</td>
                <td>{{ $prot->Docs}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop