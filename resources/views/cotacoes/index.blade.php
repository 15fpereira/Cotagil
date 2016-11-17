
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
                    <div class="button-side" style="margin-top:8px;" ><a href="/pedido/cotacao/create/{{ $cotacao->id }}" class="btn-system btn-large">Cotar Preço</a></div>
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
<!-- Modal -->
<div class="modal fade" id="addprodutos" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times" aria-hidden="true"></i></button>
                <h4 class="classic-title"><span class="fa fa-users"></span> <strong>cotágil</strong></h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn-system btn-small border-btn pull-left" data-dismiss="modal"><span class="fa fa-times"></span> Cancelar</button>
                <!--<a href="#" class="btn-system btn-small border-btn">Button</a>-->
                <p>Não é um membro? <a href="#">Solicite aqui!</a></p>
                <p>Esqueceu <a href="#">senha?</a></p>
            </div>
        </div>

    </div>
</div>
@endsection

