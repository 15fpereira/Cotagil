@extends('partials.test')
@section('content')
<div class="row-fluid carrinho">
    <div class="container" style="margin-top: 64px;">
        <div class="col-md-3">
        	@include('produtos.menu-cliente')
        </div>
        <div class="col-md-9">
        	<img src="" class="img-responsive banner">
        </div>
        <div class="col-md-9 painel">
        	<h1>Meus Pedidos</h1>
            <div class="table-responsive">
			<form action="" name="formOrc" id="formOrc" method="post">
				<input type="hidden" id="enviaForm" name="enviaForm">
                 <table class="table">
                    <tr>
                        <th colspan="2">ITENS DO CARRINHO</th>

                    </tr>
            @if(@isset($produtosCarrinho))						
				@foreach($produtosCarrinho as $produto)
                    <tr class="prod">
                        <td class="btn-excluir" style="cursor:pointer"><img src="/images/carrinho-excluir.png" class="img-responsive banner" style="display: none; margin:3px;"></td>
                        <td class="produto" idProduto="{{ $produto['id'] }}">
                            <div class="info">
                                <p class="nome">{{ $produto['nome'] }}</p>
                                <p class="codigo">código: {{ $produto['id'] }}</p>
                            </div>
                        </td>
                        <td>
                        <td>
                            <div class="operacao">
                                <div class="subtrair" style="cursor:pointer">-</div>
                                <input type="text" value="{{ $produto['quantidade'] }}" class="quantidade">
                                <div class="somar" style="cursor:pointer">+</div>
                            </div>
                        </td>

                    </tr>
                @endforeach
            @endif
                </table>
				</form>
            </div>
            <div class="pull-right ajusta-responsivo" style="width:100%;">

                <div class="pull-right ajusta-responsivo" style="width:100%;">
                    <a class="btn btn-primary" href="{{ url('produtos/listagem') }}">Continuar Comprando</a>
                    <a class="btn btn-primary" data-toggle="modal" href="#addprodutos"><i class="fa fa-plus"></i>Continuar Comprando modal</a>

                    <a class="btn btn-danger right" href="{{ url('/produtos/checkout') }}">Fechar Pedido</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection