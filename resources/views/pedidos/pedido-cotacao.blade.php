@extends('layouts.app-cotagil')

@section('content')
<div class="container">
	<h2 class="classic-title"><span>Detalhes da solicitação de cotação</span></h2>
	@if($cotacoes->count())
	<ul class="list-group">
	    <li class="list-group-item">
		  	<div class="row">
		  		<div class="col-md-2"><strong>Id Produto:</strong></div>
		  		<div class="col-md-2"><strong>Nome Produto:</strong></div>
		  		<div class="col-md-2"><strong>Descrição:</strong></div>
		  		<div class="col-md-2"><strong>Quantidade:</strong></div>
		  		<div class="col-md-2"><strong>Caracteristicas:</strong></div>
			</div>
		</li>
		@foreach($cotacoes as $produto)
	  	<li class="list-group-item">
		  	<div class="row">
		  		<div class="col-md-2">{{ $produto->produto_id }}</div>
		  		<div class="col-md-2">{{ $produto->produto->nome }}</div>
		  		<div class="col-md-2">{{ $produto->produto->descricao }}</div>
		  		<div class="col-md-2">{{ $produto->quantidade }}</div>
		  		<div class="col-md-2">
		  			<a title="Acompanhar cotação" class="btn-system btn-small border-btn btn-gray" href="/produto/cotado/{{ $produto->id }}">Acompanhar cotação</a>
		  		</div>
			</div>
		</li>
		@endforeach
	</ul>
		@if($cotacoes->hasPages())
			{!! $cotacoes->render() !!}
		@endif
	@endif
</div>
@endsection