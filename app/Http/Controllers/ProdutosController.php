<?php

namespace cotagil\Http\Controllers;

use cotagil\Categorias;
use Illuminate\Http\Request;
use cotagil\Produtos as ProdutosModel;
use cotagil\Pedido as PedidosModel;
use cotagil\PedidoDetalhes as PedidoDetalhesModel;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;


class ProdutosController extends Controller
{
    /**
     * @param Request $request
     * @param null $catId
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(Request $request, $catId = null)
    {  
        $search = $request->get('search', "");

        if ("" !== $search) {
            $produtos = ProdutosModel::search($search)->paginate(12);
        } else if (null !== $catId) {
            $produtos = 
            ProdutosModel::where(
                'id_categoria', $catId
            )
            ->paginate(12);
        } else {
            $produtos = ProdutosModel::paginate(12);
        }

        $categorias = (new Categorias)->getCategorias();
        return view('produtos.listagem', ['produtos' => $produtos, 'categorias' => $categorias, 'search' => $search]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function angular()
    {
        $produtos = ProdutosModel::paginate(12);

        return view('produtos.listagem-angular', ['produtos' => $produtos]);
    }

}