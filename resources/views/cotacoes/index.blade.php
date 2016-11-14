@extends('partials.home_fornecedor')

@section('content')
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">
            <!-- Divider -->
            <div class="hr1" style="margin-bottom:40px;"></div>

            <!-- Start Call Action -->
            @foreach($cotacoes as $cotacao)
                <div class="call-action call-action-boxed call-action-style1 clearfix">
                    <!-- Call Action Button -->
                    <div class="button-side" style="margin-top:8px;"><a href="/pedido/cotacao/create/{{ $cotacao->id }}" class="btn-system btn-large">Cotar Preço</a></div>
                    <h2 class="primary"><strong>Nome:</strong> {{$cotacao->produto->nome}} {{$cotacao->produto->descricao}}</h2>
                    <p>número do pedido: {{$cotacao->pedido_id}}  <strong>Quantidade: </strong>{{$cotacao->quantidade}}</p>
                </div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:40px;"></div>

                @endforeach
            <!-- End Call Action -->
        </div>
    </div>
</div>
@endsection