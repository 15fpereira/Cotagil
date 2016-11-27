<?php



namespace cotagil\Http\Controllers;

use cotagil\Categorias;
use Illuminate\Http\Request;
use cotagil\Produtos as ProdutosModel;
use cotagil\Pedido as PedidosModel;
use cotagil\Cotacao as CotacoesModel;
use cotagil\PedidoDetalhes as PedidoDetalhesModel;

use Illuminate\Support\Facades\Auth;

use cotagil\Http\Requests;

class PedidosController extends Controller
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
    //
    public function angular()
    {
        $produtos = ProdutosModel::paginate(12);

        return view('produtos.listagem-angular', ['produtos' => $produtos]);
    }

    public function carrinho(Request $request)
    {
        return view('produtos.carrinho', ['produtosCarrinho' => Session('carrinho')]);
    }
    public function addCarrinho(Request $request, $id)
    {
        if (Session('carrinho.'.$id)) {
            Session([
                'carrinho.'.$id.'.quantidade' =>
                    (Session('carrinho.'.$id.'.quantidade') + 1)
            ]);
        } else {
            $produto = ProdutosModel::where('id', $id)->first();
            $prod_atributes = [
                'id' => $produto->id,
                'nome' => $produto->nome,
               // 'preco' => $produto->preco
            ];
            Session(['carrinho.'.$id => $prod_atributes]);
            Session(['carrinho.'.$id.'.quantidade' => 1]);
        }
        $request->session()->flash('success', 'Produto adicionado ao carrinho !');
        return redirect('produtos/listagem');
    }
    public function checkout(Request $request)
    {
        if (!Session('carrinho')) {
            $request->session()->flash('warning', 'Lista de pedidos está vazia!!! !');
            return redirect('produtos/listagem');
        }

        $carrinho = Session('carrinho');

        //grava pedido
        $pedido = new PedidosModel;
        $pedido->user_id = Auth::id();
        //$pedido->endereco_id = $idEndereco;
        $pedido->qtd_itens = count($carrinho);
        //status 1 (aberto) e 2 (finalizado)
        $pedido->status = 1;
        $ped = $pedido->save();

//grava detalhes do pedido
        $carrinho = Session('carrinho');
        foreach ($carrinho as $produto) {
            $pedidodetalhe = new PedidoDetalhesModel;
            $pedidodetalhe->pedido_id = $pedido->id;
            $pedidodetalhe->produto_id = $produto['id'];
            $pedidodetalhe->quantidade = $produto['quantidade'];
            //$pedidodetalhe->valor_unitario = $produto['preco'];
            $pedidodetalhe->save();
        }

//grava cotacoes
        $carrinho = Session('carrinho');
        foreach ($carrinho as $produto) {
            $cotacao = new CotacoesModel;
            $cotacao->pedido_id = $pedido->id;
            $cotacao->produto_id = $produto['id'];
            $cotacao->quantidade = $produto['quantidade'];
            //$pedidodetalhe->valor_unitario = $produto['preco'];
            $cotacao->save();
        }


        $request->session()->forget('carrinho');
        $request->session()->flash('success', 'Solicitação de cotação efetuada com sucesso!');
        return redirect('/usuario/pedidos');
    }
}
