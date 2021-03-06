@extends('layouts.app-cotagil')

@section('content')
    <div class="container">
        <!-- Divider -->
        <div class="hr1" style="margin-bottom:10px;"></div>
        <div class="row">
            <h2 class="classic-title"><span>Perfil <strong>Síndico</strong></span></h2>
        </div>

        <!-- Divider -->
        <div class="hr1" style="margin-bottom:30px;"></div>

        <!-- Start Services Icons -->
        <div class="row">
            <!-- Start Service Icon 1 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-users icon-large-effect icon-effect-1"></i>
                </div>
                <div class="service-content">
                    <h4>Perfil de usuário:</h4>
                    <p>Aqui o voçê acessa o seu perfil de usuário, onde poderá modificar dados de seu perfil de usuário.</p>
                </div>
            </div>
            <!-- End Service Icon 1 -->

            <!-- Start Service Icon 2 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-eye icon-large-effect icon-effect-1"></i>
                </div>
                <div class="service-content">
                    <h4><a href="{{url('/usuario/pedidos')}}">Acompanhar cotações:</a></h4>
                    <p>Aqui, logo após a solicitação, voçê acessa os produtos listado e acompanha as cotações de seus fornecedores.</p>
                </div>
            </div>
            <!-- End Service Icon 2 -->

            <!-- Start Service Icon 3 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-usd icon-large-effect icon-effect-1"></i>
                </div>
                <div class="service-content">
                    <h4>Solicitar cotação</h4>
                    <p align="justify">Caro sindico aqui voçê poderar realizar a sua solicitação de cotação de forma rapida. Adicione os produtos desejado em seu pedido e finalize o pedido, depois é só aguarda seus fornecedores realizar as cotações.</p>
                </div>
            </div>
            <!-- End Service Icon 3 -->

            <!-- Start Service Icon 4 -->
            <div class="col-md-3 col-sm-6 service-box service-center">
                <div class="service-icon">
                    <i class="fa fa-list icon-large-effect icon-effect-1"></i>
                </div>
                <div class="service-content">
                    <h4>Meus pedidos</h4>
                    <p align="justify">Aqui voçê acessa as ultimas listas de pedidos e os itens adicionado no pedido, onde voçê poderá excluir tanto pedito quanto os itens do pedido.</p>
                </div>
            </div>
            <!-- End Service Icon 4 -->

        </div>
        <!-- End Services Icons -->
        <!-- Divider -->
        <div class="hr5" style="margin-top:25px; margin-bottom:55px;"></div>

        <!-- End Big Heading -->

        <!--Start Clients Carousel-->
        <div class="our-clients">
            <div class="clients-carousel custom-carousel touch-carousel navigation-3 owl-carousel owl-theme" data-appeared-items="5" data-navigation="true" style="opacity: 1; display: block;">

                <!-- Client 1 -->
                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 3840px; left: 0px; display: block; transition: all 0ms ease; transform: translate3d(0px, 0px, 0px);"><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c1.png" alt=""></a>
                            </div></div><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c2.png" alt=""></a>
                            </div></div><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c3.png" alt=""></a>
                            </div></div><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c4.png" alt=""></a>
                            </div></div><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c5.png" alt=""></a>
                            </div></div><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c6.png" alt=""></a>
                            </div></div><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c7.png" alt=""></a>
                            </div></div><div class="owl-item" style="width: 240px;"><div class="client-item item">
                                <a href="#"><img src="/images/c8.png" alt=""></a>
                            </div></div></div></div>

                <div class="owl-controls"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
        </div>
        <!-- End Clients Carousel -->

        <!-- Divider -->
        <div class="hr5" style="margin-top:25px; margin-bottom:55px;"></div>

        <!-- Start Call Action -->
        <div class="call-action call-action-boxed call-action-style2 clearfix">
            <!-- Call Action Button -->
            <div class="button-side" style="margin-top:4px;"><a href="#" class="btn-system btn-large">Purchase It Now</a></div>
            <!-- Call Action Text -->
            <h2 class="primary"><strong>Cotágil</strong> is the best theme to create an <strong>awesome website!</strong></h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <!-- End Call Action -->
</div>
    @endsection