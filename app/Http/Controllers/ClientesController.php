<?php

namespace App\Http\Controllers;

use App\clientes;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Html\FormFacade;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;


class ClientesController extends Controller
{
   private function ver_usuario($user) {
       // montagem da string so usuário apra o andamento no blog
       $tmpArr = preg_split("/[\s,]+/",$user->name);
       return $tmpArr[0];
   }

     private function ParamJS()
     {
         JavaScriptFacade::put([
             'useratual' => $this->ver_usuario(Auth::user()),
             'hoje' => date('d/m/Y', strtotime( Carbon::today()->toDateString()))
         ]);
            return null;
     }
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function protocolar($id)
    {
        $cliente = clientes::findorfail($id);
        return view('protocolos.Create',compact('cliente') );
    }

    public function index(Request $request)
    {
      //return \Auth::user();


        $listadeCLientes = clientes::orderby('updated_at','desc');  //paginate(15);//->paginate(2);
        $pesca = $request->input('q');

        if (!empty($pesca)){
            $listadeCLientes->where('nome','LIKE','%'.$pesca.'%');
            $filtro = $pesca."...";

        } else {$filtro = 'Nome do Cliente...';}

        $listadeCLientes = $listadeCLientes->paginate(15);

       return view('cliente.Lista', compact('listadeCLientes','filtro'));

    }
    public  function show ($id)
    {

    }
    public function create ()
    {
        $this->ParamJS();

      return view('cliente.Create');

    }


    public function store(ClienteRequest $request) // retirei o Requests\
    {
        // para pegar só um campo usamos o get
        //$input = Request::get('nome'); ou $input = Request::get('DtNascimento')
        $ok = clientes::create($request->all());

        session()->flash('flash_message', 'Cliente criado com sucesso!');

        return redirect('cliente/'.$ok->id.'/edit');
    }

    public function edit($id)
    {
        // edição do cliente aqui.
        $cliente = clientes::findorfail($id);
        $this->ParamJS();
        return view('cliente.Edit', compact('cliente') );
    }

    public function update($id, ClienteRequest $request)
    {
        $cliente = clientes::findorfail($id);

        $cliente->update($request->all());

        session()->flash('flash_message', 'Registro salvo com sucesso!');

        return redirect('cliente/'.$id.'/edit');
    }

}

