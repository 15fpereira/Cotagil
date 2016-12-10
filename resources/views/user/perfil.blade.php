@extends('layouts.app-cotagil')

@section('content')
<div class="container-fluid">
	<h2>Dados Pessoais</h2>
	<ul class="list-group">
	    <li class="list-group-item">
		  	<div class="row">
		  		<div class="col-md-4">Nome</div>
		  		<div class="col-md-4 col-md-offset-4">{{ $user->name }}</div>
			</div>
		</li>
	  	<li class="list-group-item">
	  		<div class="row">
			  	<div class="col-md-4">Email</div>
			  	<div class="col-md-4 col-md-offset-4">{{ $user->email }}</div>
			</div>
		</li>
	</ul>

	@if ($user->enderecos)
	<div class="container-fluid colored">
		<h2>Enderecos</h2>
		@foreach($user->enderecos as $endereco)
		<ul class="list-group centralizado">
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
		@endforeach
	</div>
	@endif
</div>
@endsection