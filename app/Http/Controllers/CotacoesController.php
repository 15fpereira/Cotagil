<?php

namespace cotagil\Http\Controllers;

use cotagil\Cotacao;

use cotagil\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth;

use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Input;

use cotagil\Http\Requests;



class CotacoesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $cotacoes = Cotacao::all();
        return view('cotacoes.index', compact('cotacoes'));
    }

    public function edit($id){

        if(!($cotacoes = Cotacao::find($id))){
            throw new ModelNotFoundException('Cotação não encontrada!!!!');

        }
        return view('cotacoes.edit');

    }
    public function update(){

    }

    public function create($idcotacao)
    {
        $cotacao = Cotacao::find($idcotacao);
        return view('cotacoes.create',['cotacao' => $cotacao]);
    }

    public function store(Request $request, $idcotacao)
    {
                //$idcotacao = 1;
       $user = User::find(\Auth::user()->id);
        $user->cotacoes()->attach($idcotacao, [
            'preco' => $request->preco,
            'marca' => $request->marca,
            'prazo' => $request->prazo,
            'status' => 1
        ]);

        return redirect()->back();

    }
}
