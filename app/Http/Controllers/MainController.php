<?php

namespace App\Http\Controllers;

use App\clientes;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laracasts\Utilities\JavaScript\JavaScriptFacade;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function carregar_trello($cli)
    {

       $cliente = clientes::findorfail($cli);

        JavaScriptFacade::put([
            'nomeCli' => $cliente->nome,
            'chave' => $cliente->trellokey,

        ]);

        return view('trello.index',compact('cliente', 'okokok'));
    }

    public function index()
    {
        //
        
        $nome = "Flipe Mallmann";
        $arr = [];
        $arr['completo'] = $nome;
        $arr['familia'] = 'Mallmann';
        $arr['primeiro'] = 'Filipe';
        return view('welcome', $arr);
    }



    /**
     * Display o centro de administração.
     */
    public function admin()
    {
        return view('admin');
    }

    public function home()
    {
        $usuario = Auth::user();
        return view('auth.home',compact('usuario'));
}

    public function post_trello(Request $requests)
    {
        $usuario = Auth::user();

        $usuario->update(['trellokey' => $requests->get('trellokey')]);

        session()->flash('flash_message', 'Chave atualizada com sucesso!');

        return redirect('/home');
    }

}
