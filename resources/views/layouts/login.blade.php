@include('layouts.cotagil')
@section('content')
  <div class="container">
      <div class="row">

      </div>
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
          <i class="fa fa-pencil icon-large-effect icon-effect-1"></i>
        </div>
        <div class="service-content">
          <h4>Clean Modern Code</h4>
          @yield('content')
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
          <p>Aqui voçê acessa as ultimas listas de pedidos.</p>
        </div>
      </div>
      <!-- End Service Icon 4 -->

    </div>
  </div>
@endsection