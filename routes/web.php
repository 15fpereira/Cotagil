<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::resource('produto','ProdutosController');
Route::resource('categoria','CategoriasController');

Route::get('servico/solicitacao/cotacao',
    ['as' => 'cotacao.solicitao', 'middleware' => 'auth', 'uses' => 'CotacoesController@solicitacaoCotacao']);


Route::get('pedido/cotacao/create/{idcotacao}',
    ['as' => 'cotacao.create', 'middleware' => 'auth', 'uses' => 'CotacoesController@create']);

//Route::put('/pedido/cotacao/store/{idcotacao}',
  //  ['as' => 'pedido.cotacao.store', 'middleware' => 'auth', 'uses' => 'CotacoesController@store']);

Route::get('pedido/cotacao/{idpedido}',
    ['as' => 'pedido.cotacao', 'middleware' => 'auth', 'uses' => 'CotacoesController@index']);

Route::any('pedido/cotacao/store/{idcotacao}',
    ['as' => 'cotacao.store', 'middleware' => 'auth', 'uses' => 'CotacoesController@store']);

//Route::resource('pedido/cotacao','CotacoesController');

Route::get('/', function () {
    return view('layouts.slide');
});

Route::get('perfil/fornecedor', function () {
    return view('user.fornecedor.perfil');
});

Route::get('usuario/cotacao/{idPedido}',
    ['as' => 'usuario.pedido.cotacao', 'middleware' => 'auth', 'uses' => 'HomeController@cotacao']);

Route::get('produto/cotado/{idcotacao}',
    ['as' => 'usuario.pedido.cotado', 'middleware' => 'auth', 'uses' => 'HomeController@produtoCotado']);

Route::get('minha-cotacao',
    ['as' => 'usuario.pedido.minha-cotacao', 'middleware' => 'auth', 'uses' => 'HomeController@minhaCotacao']);


Auth::routes();

Route::group(['middleware' => 'perfil'], function () {


    Route::get('perfil/sindico', function () {
        return view('user.sindicos.perfil');
    });

    Route::get('usuario/recusar/{id}',
        ['as' => 'usuario.recusar', 'middleware' => 'auth', 'uses' => 'CotacoesController@recusar']);
    
    Route::get('usuario/comprar/{id}',
        ['as' => 'usuario.comprar', 'middleware' => 'auth', 'uses' => 'CotacoesController@comprar']);
    
    Route::get('/produtos/listagem/{catId?}', ['as' => 'produtos.listagem', 'middleware' => 'auth', 'uses' => 'ProdutosController@getIndex']);

    Route::get('/produtos/angular/listagem', ['as' => 'produtos.angular.listagem', 'middleware' => 'auth', 'uses' => 'ProdutosController@angular']);

    Route::get('/produtos/carrinho', ['as' => 'produtos.carrinho', 'middleware' => 'auth', 'uses' => 'PedidosController@carrinho']);

    Route::get('/addcarrinho/{id}', ['as' => 'addcarrinho', 'middleware' => 'auth', 'uses' => 'PedidosController@addCarrinho']);

    Route::get('/produtos/checkout', ['as' => 'produtos.checkout', 'middleware' => 'auth', 'uses' => 'PedidosController@checkout']);



    Route::get('/home', 'HomeController@index');

    Route::get('/usuario/perfil/{id}', ['as' => 'usuario.perfil', 'middleware' => 'auth', 'uses' => 'HomeController@userPerfil']);

    Route::get('/usuario/pedidos', ['as' => 'usuario.pedidos', 'middleware' => 'auth', 'uses' => 'HomeController@meusPedidos']);
    Route::get('/usuario/cotacao', ['as' => 'usuario.pedido.cotacao', 'middleware' => 'auth', 'uses' => 'HomeController@cotacao']);

    Route::get('/usuario/pedido-detalhes/{idPedido}',
        ['as' => 'usuario.pedido.detalhes', 'middleware' => 'auth', 'uses' => 'HomeController@pedidoDetalhes']);
    Route::get('/usuario/pedido-cotacao/{idPedido}',
        ['as' => 'pedito.pedido.cotacao', 'middleware' => 'auth', 'uses' => 'HomeController@pedido']);


    Route::get('/usuario/endereco-entrega',
        ['as' => 'usuario.endereco.entrega', 'middleware' => 'auth', 'uses' => 'HomeController@enderecoEntrega']);


});