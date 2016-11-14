@extends('layouts.app')

@section('content')
<div class="container">
	@if ($enderecos)
	<div class="container-fluid colored">
		<h2>Escolha um endereco para entrega</h2>
		@foreach($enderecos as $endereco)
		<div class="row">
			<div class="col-md-6">
				<ul class="list-group">
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4">Endereco</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->endereco }}</div>
					  	</div>
					</li>
					<li class="list-group-item">
					  	<div class="row">
							<div class="col-md-4">Numero</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->numero }}</div>
					  	</div>
					</li>
					<li class="list-group-item">
					  	<div class="row">
							<div class="col-md-4">Complemento</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->complemento }}</div>
					  	</div>
					</li>
					<li class="list-group-item">
					  	<div class="row">
							<div class="col-md-4">CEP</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->cep }}</div>
					  	</div>
					</li>
					<li class="list-group-item">
					  	<div class="row">
							<div class="col-md-4">Bairro</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->bairro }}</div>
					  	</div>
					</li>
					<li class="list-group-item">
					  	<div class="row">
							<div class="col-md-4">Estado</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->estado }}</div>
					  	</div>
					</li>
					<li class="list-group-item">
					  	<div class="row">
							<div class="col-md-4">Cidade</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->cidade }}</div>
					  	</div>
					</li>
					<li class="list-group-item">
					  	<div class="row">
					  		<div class="col-md-4">Pais</div>
					  		<div class="col-md-4 col-md-offset-4">{{ $endereco->pais }}</div>
					  	</div>
					</li>
				</ul>
			</div>
			<div class="col-md-6">
				<a class="btn btn-primary endereco" href="/produtos/checkout/{{ $endereco->id }}">Escolher esse endereco</a>
			</div>
		</div>
		@endforeach
	</div>
		@if($enderecos->hasPages())
			{!! $enderecos->render() !!}
		@endif
	@endif
</div>
@endsection