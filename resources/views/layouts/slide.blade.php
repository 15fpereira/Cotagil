@extends('layouts.home-cotagil')

@section('content')
<!-- Start HomePage Slider -->

    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/bg1.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
									<span>Bem vindo ao <strong>COTÁGIL</strong></span>
								</h2>
                <h3 class="animated3">
									<span>SISTEMA DE COTAÇÃO ON-LINE ESPECIFICO PARA CONDOMÍNIO</span>
								</h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">verifique agora</a></p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg2.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
									<span><strong></strong>Ola <strong>Síndico!</strong></span>
								</h2>
                <h3 class="animated5">
									<span>Ficou fácil cotar produto em seu comdomínio</span>
								</h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Demostração</a></p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/bg3.jpg" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
									<span>Ola <strong>Fornecedor!</strong></span>
								</h2>
                <h3 class="animated8 white">
									<span>Aqui vc pode realizar o melhor negócio!</span>
								</h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Conheça nosso sistema</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Desmostração</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End HomePage Slider -->


    <!-- Start Content -->
    <div id="content">
      <div class="container">

        <!-- Start Services Icons -->
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-laptop icon-large-effect icon-effect-1"></i>
            </div>
            <div class="service-content">
              <h4>Fonecedor</h4>
              <p>Fornecedor veja como é fácil e rapito cotar preço de seus produtos no sistema cotÁgil. 
              O sistema cotÁgil fará tudo para voçê, voçê só vai entregar o seu produto..</p>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-users icon-large-effect icon-effect-1"></i>
            </div>
            <div class="service-content">
              <h4>Morador</h4>
              <p>Morador veja como é fácil participar das etapas de cotação, voçê pode desidir quais produtos                 
              aliqua.
              </p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-building-o icon-large-effect icon-effect-1"></i>
            </div>
            <div class="service-content">
              <h4>Codominio</h4>
              <p>O sistema cotágil foi desenvolvido para atender todos os condominio em todo o Brasisl, basta solicitar acesso ao sistema.</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

          <!-- Start Service Icon 4 -->
          <div class="col-md-3 col-sm-6 service-box service-center">
            <div class="service-icon">
              <i class="fa fa-mobile icon-large-effect icon-effect-1"></i>
            </div>
            <div class="service-content">
              <h4>Acessibilidade</h4>
              <p>Voçê pode acessar o site em qulquer dispositivo sem instalação de aplicativo, a nossa plataforma e toda responsivo.</p>
            </div>
          </div>
          <!-- End Service Icon 4 -->

        </div>
        <!-- End Services Icons -->


        <!-- Divider -->
        <div class="hr5" style="margin-top:55px; margin-bottom:50px;"></div>

      

        <!-- Start Big Heading -->
        <div class="big-title text-center">
          <h1>Nossos <strong>Clientes</strong></h1>
          <p class="title-desc">Parceiros com que trabalhamos</p>
        </div>
        <!-- End Big Heading -->

        <!--Start Clients Carousel-->
        <div class="our-clients">
          <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

            <!-- Client 1 -->
            <div class="client-item item">
              <a href="#"><img src="images/c1.png" alt="" /></a>
            </div>

            <!-- Client 2 -->
            <div class="client-item item">
              <a href="#"><img src="images/c2.png" alt="" /></a>
            </div>

            <!-- Client 3 -->
            <div class="client-item item">
              <a href="#"><img src="images/c3.png" alt="" /></a>
            </div>

            <!-- Client 4 -->
            <div class="client-item item">
              <a href="#"><img src="images/c4.png" alt="" /></a>
            </div>

            <!-- Client 5 -->
            <div class="client-item item">
              <a href="#"><img src="images/c5.png" alt="" /></a>
            </div>

            <!-- Client 6 -->
            <div class="client-item item">
              <a href="#"><img src="images/c6.png" alt="" /></a>
            </div>

            <!-- Client 7 -->
            <div class="client-item item">
              <a href="#"><img src="images/c7.png" alt="" /></a>
            </div>

            <!-- Client 8 -->
            <div class="client-item item">
              <a href="#"><img src="images/c8.png" alt="" /></a>
            </div>

          </div>
        </div>
        <!-- End Clients Carousel -->

        <!-- Divider -->
        <div class="hr5" style="margin-top:25px; margin-bottom:55px;"></div>

        <!-- Start Call Action -->
        <div class="call-action call-action-boxed call-action-style2 clearfix">
          <!-- Call Action Button -->
          <div class="button-side" style="margin-top:4px;"><a href="#" class="btn-system btn-large">Click aqui!</a></div>
          <!-- Call Action Text -->
          <h2 class="primary"><strong>Cotágil</strong> sistema de cotação <strong>especifico para condominio!</strong></h2>
          <p>Conheça o nosso sistema.</p>
        </div>
        <!-- End Call Action -->

      </div>
    </div>
    <!-- End Content -->
@endsection