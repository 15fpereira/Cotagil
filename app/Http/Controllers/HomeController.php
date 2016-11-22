<?php

namespace cotagil\Http\Controllers;

use cotagil\Cotacao;
use Illuminate\Http\Request;
use cotagil\User;
use cotagil\Pedido;
use cotagil\PedidoDetalhes;
use Illuminate\Support\Facades\Auth;
use cotagil\Enderecos;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return redirect('produtos/listagem');

            return redirect('/perfil/sindico');


    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userPerfil($id)
    {
        $user = User::where('id', $id)->first();

        return view('user.perfil', ['user' => $user]); 
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function meusPedidos()
    {
        $pedidos = Pedido::where('user_id', Auth::id())->paginate(4);
        
        return view('pedidos.meus-pedidos', ['pedidos' => $pedidos]);
    }

    /**
     * @param Request $request
     * @param $idPedido
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function pedidoDetalhes(Request $request, $idPedido)
    {
        $pedidoDetalhes = PedidoDetalhes::where('pedido_id', $idPedido)->paginate(4);

        return view('pedidos.pedido-detalhes', ['pedidoDetalhes' => $pedidoDetalhes]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function enderecoEntrega()
    {
        $enderecos = Enderecos::where('user_id', Auth::id())->paginate(4);

        return view('pedidos.endereco-entrega', ['enderecos' => $enderecos]);
    }

    public function cotacao(Request $request, $idPedido)
    {
        $cotacoes = Cotacao::where('pedido_id', $idPedido)->paginate(4);

        return view('pedidos.pedido-cotacao',['cotacoes'=>$cotacoes]);
    }
    public function produtoCotado(Request $request, $idcotacao)
    {

        $cotados = Cotacao::find($idcotacao);

       // dd($cotados->quantidade);
        //dd($cotados->produto->descricao);


        return view('cotacoes.cotado',['cotados'=>$cotados]);
    }

    /**
     * LIsta as cotação do usuário logado
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function minhaCotacao()
    {
        $user = User::find(\Auth::user()->id);

        return view('cotacoes.minha-cotacao',['user'=>$user]);
    }


}
