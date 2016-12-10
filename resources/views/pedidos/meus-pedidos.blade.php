@extends('layouts.app-cotagil')

@section('content')
<div class="container">
	<h2 class="classic-title"><span>Minhas solicitações de cotação em aberto</span></h2>
	@if($pedidos->count())
		
	<ul class="list-group">
	    <li class="list-group-item">
		  	<div class="row">
		  		<div class="col-md-3"><strong>Id Pedido</strong></div>
		  		<div class="col-md-3"><strong>Quantidade de Itens</strong></div>
		  		<div class="col-md-2"><strong>Data da Compra</strong></div>
		  		<div class="col-md-2"><strong>Status da Compra</strong></div>
		  		<div class="col-md-2"><strong>Ver Detalhes</strong></div>
			</div>
		</li>
		@foreach($pedidos as $pedido)
			@if ($pedido->status == 1)
			  	<li class="list-group-item">
				  	<div class="row">
				  		<div class="col-md-3">{{ $pedido->id }}</div>
				  		<div class="col-md-3">{{ $pedido->qtd_itens }}</div>
				  		<div class="col-md-2">{{ $pedido->created_at }}</div>
				  		<div class="col-md-2">Em andamento</div>
				  		<div class="col-md-2">
				  			<a class="btn-system btn-small border-btn btn-gray" href="/usuario/cotacao/{{ $pedido->id }}">Detalhes</a>
				  		</div>
					</div>
				</li>
			@endif
		@endforeach
	</ul>
		@if($pedidos->hasPages())
	        {!! $pedidos->render() !!}
	    @endif
	@endif

	<h2 class="classic-title"><span>Minhas solicitações de cotação finalizadas</span></h2>
	@if($pedidos->count())
	<ul class="list-group">
	    <li class="list-group-item">
		  	<div class="row">
		  		<div class="col-md-3"><strong>Id Pedido</strong></div>
		  		<div class="col-md-3"><strong>Quantidade de Itens</strong></div>
		  		<div class="col-md-2"><strong>Data da Compra</strong></div>
		  		<div class="col-md-2"><strong>Status da Compra</strong></div>
		  		<div class="col-md-2"><strong>Ver Detalhes</strong></div>
			</div>
		</li>
		@foreach($pedidos as $pedido)
			@if ($pedido->status == 2)
			  	<li class="list-group-item">
				  	<div class="row">
				  		<div class="col-md-3">{{ $pedido->id }}</div>
				  		<div class="col-md-3">{{ $pedido->qtd_itens }}</div>
				  		<div class="col-md-2">{{ $pedido->created_at }}</div>
				  		<div class="col-md-2">Finalizado</div>
				  		<div class="col-md-2">
				  			<a class="btn-system btn-small border-btn btn-gray" href="/usuario/cotacao/{{ $pedido->id }}">Detalhes</a>
				  		</div>
					</div>
				</li>
			@endif
		@endforeach
	</ul>
		@if($pedidos->hasPages())
	        {!! $pedidos->render() !!}
	    @endif
	@endif
</div>
@endsection