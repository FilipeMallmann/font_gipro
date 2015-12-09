<?php

namespace App\Http\Controllers;


use App\clientes;
use App\iniciais;
use App\Http\Requests\IniciaisRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class IniciaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function formata_data($datas)
    {
        setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
        // tirei o dia da semana que era %A
        return strftime('%d de %B de %Y', strtotime($datas));
    }
    public function criar_odt($jvar)
    {
       //$tmpfile = ('template_ini.odt');
       //return readfile($tmpfile);

    }

    public function criar_doc($jvar)
    {

    }

    public function getDownload(){
        //PDF file is stored under project/public/download/info.pdf
        $file= public_path(). "/download/template.odt";
        $headers = array(
            'Content-Type: application/odt',
        );
        return response()->download($file);
    }

    public function index()
    {
        //

        $listaIniciais = iniciais::latest();
        $listaIniciais = $listaIniciais->paginate(10);

        return view('iniciais.Lista', compact('listaIniciais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function atualizar_ini($jvar,$jdata)
    {
       /*
        * Constantes para preenchimento dos dados comuns das petições
        */
        $_ENDERECAMENTO = $jdata;

        $_PEDIDO_REQUERIMENTO = "\nAnte o exposto, requer:\n\n";
        $_DEFERIMENTO = "\nNesses Termos, Pede Deferimento\n";
        $_DATALOCAL = "\nPorto Alegre, ".$this->formata_data(Carbon::today()).".\n";

        $_RODAPE[0] = "\n\n___________________                            ____________________________\n";
        $_RODAPE[1] = "Filipe Pinto Mallmann                           Rafael Pinto Mallmann\n  ";
        $_RODAPE[2] = "   OAB/RS 98688                                      OAB/RS 74971\n";





        $tmpdata1 = [];
       $tmpdata2 = [];


//        array_push($tmpdata1,$_ENDERECAMENTO);

        $listagem = preg_split("/[\s,]+/",$jvar);
        $i =0;
        foreach ($listagem as $item) {
            $i++;
            $pad = $i.' - '.iniciais::find($item)->Titulo;

            array_push($tmpdata1, $pad);

            $pad = "\n\n".iniciais::find($item)->Corpo."\n\n";

            array_push($tmpdata1,$pad);

        }
        $i = 0;
        foreach ($listagem as $item) {
            $i++;

            $pad = $i.' - '. iniciais::find($item)->Pedidos."\n\n";

            array_push($tmpdata2,$pad);

        }
        array_push($tmpdata1,$_PEDIDO_REQUERIMENTO);
        array_push($tmpdata2,$_DEFERIMENTO);
        array_push($tmpdata2,$_DATALOCAL);
        array_push($tmpdata2,$_RODAPE[0]);
        array_push($tmpdata2,$_RODAPE[1]);
        array_push($tmpdata2,$_RODAPE[2]);

        $jdata = array_merge($tmpdata1,$tmpdata2);



        return Response()->json($jdata);
    }

    public function montar_meio(Request $request, $cli)
    {
        // necess´rio implementar
    }

    public function montar_inicial(Request $request, $cli)
    {
        $cliente = clientes::findOrFail($cli);
        $listaIniciais = iniciais::orderby('Referencia');

        $pesca = $request->input('q');

        if (!empty($pesca)){
            $listaIniciais->where('Referencia','LIKE','%'.$pesca.'%');
        }

        $listaIniciais = $listaIniciais->paginate(10);


        return view('iniciais.montar-inicial', compact('cliente', 'listaIniciais'));
    }


    public function montar(Request $request)
    {
        // controlador obsoleto

        $listaIniciais = iniciais::orderby('Referencia');

        $pesca = $request->input('q');

        if (!empty($pesca)){
            $listaIniciais->where('Referencia','LIKE','%'.$pesca.'%');
        }

        $listaIniciais = $listaIniciais->paginate(10);

        return view('iniciais.montagem',compact('listaIniciais'));
    }
    public function create()
    {
        //
        return view('iniciais.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(IniciaisRequest $request)
    {
        //
        $incic = iniciais::create($request->all());

        session()->flash('flash_message', 'Modelo criado com sucesso!');

        return redirect(url('iniciais/'.$incic->id.'/edit'));


    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
        $inicic = iniciais::findorfail($id);

        return view('iniciais.edit',compact('inicic'));
    }


    public function update(IniciaisRequest $request, $id)
    {
        //

        $inic = iniciais::findorfail($id);

        $inic->update($request->all());

        session()->flash('flash_message', 'Modelo alterado com sucesso!');
        return redirect(action('IniciaisController@index'));
    }

    public function destroy($id)
    {
        //

    }
}
