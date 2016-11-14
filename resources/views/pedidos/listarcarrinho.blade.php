@extends('layouts.app')

                   
@section('content')
		    <div id="content">
      <div class="container">
        <div class="page-content">
          
    

            <div class="row">
           
                <div class="col-lg-12">
                    <h1 class="classic-title"><span> Nova compras</span></h1>
                </div>
                <div class="col-lg-6 text-left">
                    <div class="bd-example">
                      <a href="{{ '/condominio.novacompra' }}" type="button" class="btn-system border-btn btn-large btn-gray"><i class="fa fa-plus" aria-hidden="true"></i> ADICIONAR PRODUTO NA LISTA</a>
                    </div>
                  </div>
                </div>
@if(Session::has('carrinho'))
	            <!-- /.row -->
            <div class="row"> 
                <div class="col-sm-10 col-md-10" >
                        <h3 class="classic-title"><span> Lista de Produtos</span></h3>
                            <ul class="list-group">
                           		@foreach($produtos as $produto)
                           		<li class="list-group-item">
                           			<span class="badge">{{ $produto['qtd'] }}</span>
                           			<span> <i class="fa fa-plus"></i></span>
                           			<strong>{{ $produto['item']['nome'] }}</strong>
                           			<b>{{ $produto['item']['descricao'] }}</b>
                           			<div classic="btn-group">
                           				<button type="button" class="btn-system btn-mini border-btn btn-black btn-xs dropdown-toogle" data-toogle="dropdown">Ação <span class="caret"></span></button>
                           					<ul class="dropdown-menu">
                           						<li><a href="#">List 1</a></li>
                           						<li><a href="#">List 1</a></li>
                           					</ul>
                           			</div>
                           		</li>
                           		@endforeach
                            </ul>            
                	</div>
               </div>
                <div class="row"> 
                	<div class="col-sm-10 col-md-10" >
               
                      <button type="button" class="btn-system btn-small btn-gray"> Solicitar cotação</button>           
                	</div>
               </div>
@else
	   <div class="row"> 
                	<div class="col-sm-10 col-md-10" >
               			<h2>Não há itens adicionado!!! Clique <a href="{{ '/condominio.novacompra' }}">aqui</a> para adicionar...</h2>

                	</div>
               </div>
@endif
	</div>
    </div>
    </div>
    <!-- End Content -->


@endsection