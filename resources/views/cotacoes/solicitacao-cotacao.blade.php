@extends('partials.home_fornecedor')
@section('content')
    <div class="container">
        <div class="row">

            <div class="page-content">



                <h2 class="classic-title"><span>Sindicos solicitando sua cotação</span></h2>
                <!-- Divider -->
                <div class="hr1" style="margin-bottom:30px;"></div>

                <!-- Divider -->
                <div class="hr1" style="margin-bottom:40px;"></div>

                @foreach ($pedidos as $pedido)
                    @if($pedido->status == 1)
                        @if(count($pedido))
                            <!-- Start Call Action -->
                            <div class="call-action call-action-boxed call-action-style3 clearfix">
                                <!-- Call Action Button -->
                                <div class="button-side" style="margin-top:10px;">
                                    <a href="#" class="btn-system border-btn btn-medium btn-wite"><i class="icon-gift-1"></i> Recusar cotação</a>
                                    <a href="/pedido/cotacao/{{$pedido->id}}" class="btn-system border-btn btn-medium"><i class="icon-basket"></i>Realizar cotação</a></div>
                                <!-- Call Action Text -->
                                <h2 class="primary">Olá <strong>{{Auth::user()->name}}</strong> o condomínio <strong>{{$pedido->user->condominio}}</strong> está solicitando a cotação de seus produtos!</h2>
                                <p>Nome do sindico: {{$pedido->user->name}} | telefone: 68 3221 1666 | numero do pedid0: 00{{$pedido->user_id}}</p>
                                <p>Edereço do condominio: rua X, bairro Santos nº 200 Rio Branco Ac</p>
                            </div>
                            <!-- Divider -->
                            <div class="hr1" style="margin-bottom:40px;"></div>

                        @endif
                    @else
                        <h2>Ola <strong>{{Auth::user()->nomefantazia}}</strong>, no momento não extiste nenhuma solicitação de cotação!</h2>
                        <p>Deseja voltar para tela inicial? <a href="{{'/home'}}">Click aqui!</a></p>
                    <!--<h2>Ola {{Auth::user()->name}}, não tem solicitação de cotação no momento!</h2>
                        <p>Caso queira voltar para tela inicial <a href="#">click aqui!</a></p>-->
                    @endif
@endforeach



<!-- End Call Action -->

</div>

</div>

</div>

@endsection