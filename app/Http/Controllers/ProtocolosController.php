<?php

namespace App\Http\Controllers;

use App\protocolos;
//use Illuminate\Http\Request;
use App\clientes;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class ProtocolosController extends Controller
{

    public function index()
    {
        // mostra a lista de protocolos
        $listadeProtocolos = protocolos::latest()->get();

        return view('protocolos.Lista', compact('listadeProtocolos'));
    }


    public function novo($cli)
    {
        $cliente = clientes::findorfail($cli);


        return view('protocolos.Create', compact('cliente'));
        //return $cli;
    }

    public function store(Requests\ProtocoloRequest $request)
    {
        //
        $ok = protocolos::create($request->all());

        $andamento = clientes::findorfail($ok->cod_cli);
        $tmpAnd = $andamento->Andamento;
        $tmpAtual = $tmpAnd."\n".date('d/m/Y H:i:s', strtotime($ok->created_at)).' * Protocolo criado - '.$ok->Tipo;

        $andamento->update(['Andamento' => $tmpAtual]);

        //$ok = clientes::create($request->all());

        session()->flash('flash_message', 'Protocolo criado com sucesso!');

        return redirect('cliente/'.$ok->cod_cli.'/edit');

    }


    public function show($id)
    {
        // lista os protocolos só de um cliente
        //o id é do cliente. pois os valores vem sempre da lista de

        $listadeProtocolos = clientes::findorfail($id)->protocolos;


        return view('protocolos.Lista',compact('listadeProtocolos'));


    }

    public function edit($id)
    {
        $prot= protocolos::findorfail($id);


        return view('protocolos.Edit', compact('prot'));
       // return $prot->cliente->nome;
    }

    public function update($id, Requests\ProtocoloRequest $request)

    {
        $prot = protocolos::findorfail($id);

        $prot->update($request->all());

        session()->flash('flash_message', 'Protocolo salvo com sucesso!');

        //return redirect('protocolos');
        return redirect('cliente/'.$prot->cod_cli.'/edit');
    }

}
