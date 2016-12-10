
@extends('partials.home_fornecedor')

@section('content')
<!-- Start Content -->
<div id="content">
    <div class="container">
        <div class="page-content">
            <!-- Divider -->
            <div class="hr1" style="margin-bottom:40px;"></div>
        @if($cotacoes->count())
            <!-- Start Call Action -->
            @foreach($cotacoes as $produto)
                <div class="call-action call-action-boxed call-action-style1 clearfix">
                    <!-- Call Action Button -->
                    <div class="button-side" style="margin-top:8px;" ><a href="/pedido/cotacao/create/{{ $produto->id }}" class="btn-system btn-large">Cotar Preço</a></div>
                    <h2 class="primary"><strong>Nome:</strong> {{$produto->produto->nome}} {{$produto->produto->descricao}}</h2>
                    <p>número do pedido: {{$produto->pedido_id}}  <strong>Quantidade: </strong>{{$produto->quantidade}}</p>
                    <strong>{{$produto->pedido->qtd_itens}}</strong>
                </div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:40px;"></div>

                @endforeach
            <!-- End Call Action -->
        </div>

        @if($cotacoes->hasPages())
            {!! $cotacoes->render() !!}
        @endif
        @endif

    </div>
</div>
<!-- Modal -->

@endsection

