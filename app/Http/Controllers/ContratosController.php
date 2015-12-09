<?php

namespace App\Http\Controllers;

use App\contratos;
use Illuminate\Http\Request;
use App\clientes;
use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class ContratosController extends Controller
{
    public function index()
    {
        // pagina de visualização em lista doss contrato
        $listadeContratos = contratos::all();

        return view('contratos.Lista', compact('listadeContratos'));
    }


    public function novo($cli)
    {
        //
        $cliente = clientes::findorfail($cli);

        //return 'ok Novo contrato do cliente '.$cliente;
        return view('contratos.Create',compact('cliente'));

    }


    public function store(Requests\ContratoRequest $request)
    {
        //
        $ok = contratos::create($request->all());

        session()->flash('flash_message', 'Contrato criado com sucesso!');

        return redirect('cliente/'.$ok->cod_cli.'/edit');

    }



    public function show($id)
    {
        // o Id é o do cliente

        $listadeContratos = clientes::findorfail($id)->contratos;

        if (count(clientes::find($id)->contratos) > 0){
            return view('contratos.Lista', compact('listadeContratos'));
        } else {
            return redirect(action('ContratosController@novo',$id));
        }

    }




    public function edit($id)
    {
        //
        $contr = contratos::findOrFail($id);

        return view('contratos.edit', compact('contr'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\ContratoRequest $request, $id)
    {
        //
        $contr = contratos::findorfail($id);

        if (empty($contr->data_finalizado) || (empty($contr->Finalizado) )) {

            $contr->data_finalizado = Carbon::today()->toDateString();
        } else {
            $contr->data_finalizado = "";

        }

       /* if (($contr->Finalizado == 0)
        or ($contr->Finalizado == null))
        {
            $contr->data_finalizado = nullValue();
        }
        else {
            if (isEmptyOrNullString($contr->data_finalizado)) {$contr->data_finalizado = Carbon::now()->todatetimestring();}
        }
        */

        $contr->update($request->all());

        session()->flash('flash_message', 'Contrato salvo com sucesso!');

        return redirect(url('cliente/'.$contr->cod_cli.'/edit'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
