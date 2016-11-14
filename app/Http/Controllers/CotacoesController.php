<?php

namespace cotagil\Http\Controllers;

use cotagil\Cotacao;

use cotagil\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth;
use cotagil\Http\Requests\RequestPreco;
use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\Input;

use cotagil\Http\Requests;



class CotacoesController extends Controller
{
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

    public function create()
    {

        return view('cotacoes.create');
    }

    public function anyStore(Request $request, $id)
    {
        //dd($request->toArray());
        dd($id);
        //$idcotacao = 1;
       $user = User::find(\Auth::user()->id);
           $user->cotacoes()->attach($request->idcotacao, ['preco' => $request->preco]);
        // User::find(\Auth::user()->id)->cotacoes()->save($idcotacao, ['preco'=>$request->preco]);
        //dd($cotar = Cotacao::find($idcotacao));
        //$cotar->usuarios()->attach(\Auth::user()->id, ['preco'=>$request]);
        return redirect()->back();

    }
}
