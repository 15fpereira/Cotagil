<?php

namespace cotagil\Http\Controllers;

use cotagil\Cotacao;

use cotagil\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth;

use Illuminate\Support\Facades\App;

use Illuminate\Support\Facades\DB;
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

        return redirect()->route('cotacao');
    }

    public function recusar(Request $request, $id) 
    {
        DB::table('cotacao_user')
            ->where('id', $id)
            ->update(['status' => 0]);

        return redirect()->back();
    }

    public function comprar(Request $request, $id) 
    {
        //select para pegar o id da cotacao
        $cotacao = DB::select('SELECT cotacao_id FROM cotacao_user WHERE id = ?', [$id]);
        foreach ($cotacao as $c) :
            $id_cotacao = $c->cotacao_id;
        endforeach;
        
        //recusar todas as outras cotações daquele produto.
        DB::table('cotacao_user')
            ->where('cotacao_id', $id_cotacao)
            ->update(['status' => 0]);
        
        //atualiza o status do item que sera comprado
        DB::table('cotacao_user')
            ->where('id', $id)
            ->update(['status' => 2]);

        //consulta para retornar as informações da tablea "pedidos"
        $pedido = DB::select('select * from cotacaos, pedidos where pedidos.id = cotacaos.pedido_id and cotacaos.id = ?', [$id_cotacao]);
        //transforma o resultado do select em variaveis
        foreach ($pedido as $p) :
            $id_pedido     = $p->pedido_id;
            $qtd_itens     = $p->qtd_itens;
            $qtd_comprados = $p->qtd_comprados;
        endforeach;
        //incrementa o campo qtd_comprados, sinalizando que mais um item do pedido foi comprado
        DB::table('pedidos')
            ->where('id', $id_pedido)
            ->update(['qtd_comprados' => ($qtd_comprados+1)]);

        //consulta para retornar as informações da tablea "pedidos"
        $pedido2 = DB::select('select * from cotacaos, pedidos where pedidos.id = cotacaos.pedido_id and cotacaos.id = ?', [$id_cotacao]);

        foreach ($pedido2 as $p2) :
            $id_pedido2     = $p2->pedido_id;
            $qtd_itens2     = $p2->qtd_itens;
            $qtd_comprados2 = $p2->qtd_comprados;
        endforeach;

        if ($qtd_itens2 == $qtd_comprados2) {

            //atualiza o status do pediod, sinalizado que todos os itens foram comprados
            DB::table('pedidos')
                ->where('id', $id_pedido2)
                ->update(['status' => 2]);
        }

        return redirect()->back();
    }
}
