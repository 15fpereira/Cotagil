<?php

namespace cotagil\Http\Controllers;

use cotagil\Produtos;

use Illuminate\Http\Request;

use cotagil\Http\Requests;

use cotagil\Categorias;

use cotagil\Produtos as ProdutosModel;
use cotagil\Pedido as PedidosModel;
use cotagil\PedidoDetalhes as PedidoDetalhesModel;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Auth;

class ProdutosController extends Controller
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

    public function getIndex(Request $request, $catId = null)
    {
        $search = $request->get('search', "");
        if ("" !== $search) {
            $produtos = ProdutosModel::search($search)->paginate(12);
        } else if (null !== $catId) {
            $produtos =
                ProdutosModel::where(
                    'categoria_id', $catId
                )
                    ->paginate(12);
        } else {
            $produtos = ProdutosModel::paginate(12);
        }
        //inner join que esta na model Categorias
        $categorias = (new Categorias)->getCategorias();
        return view('produtos.listagem', ['produtos' => $produtos, 'categorias' => $categorias, 'search' => $search]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produtos::all();
        return view('produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Produtos::create($data);
        return view('produto.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
