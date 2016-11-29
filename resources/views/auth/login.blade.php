@extends('layouts.home-cotagil')
@section('content')
    <div class="container">
        <h2 class="classic-title"><span>Login do sistema</span></h2>
            <div class="row">
                <div class="col-md-6 col-sm-8 service-box service-center">
                    <div class="service-boxed">
                        <div class="service-icon" style="margin-top:-25px;">
                            <i class="fa fa-users icon-medium-effect icon-effect-1"></i>
                        </div>
                        <div class="service-content">

                            <div class="row">
                                <div class="col-md-10">
                                    <!-- Start Contact Form -->
                                    <form class="contact-form" id="contact-form" role="form" method="POST" action="{{ url('/login') }}">
                                        {{ csrf_field() }}
                                        <div class="controls form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="form-group">
                                                <input id="email" type="text" name="email" value="{{ old('email') }}" autofocus placeholder="Email:">

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="controls">
                                                <input id="password" type="password" class="email" name="password" placeholder="Senha:">

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">

                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> Lembrar senha!
                                                </label>
                                                <a href="{{ url('/password/reset') }}">
                                                   | Esqueceu a senha? Click aqui!
                                                </a>

                                            </div>

                                        </div>

                                        <div class="form-group">

                                            <button type="submit" class="btn-system border-btn btn-large">
                                                <i class="fa fa-unlock" aria-hidden="true"></i> Entrar no sistema
                                            </button>
                                            <button type="reset" class="btn-system border-btn btn-large btn-gray">
                                                <i class="fa fa-times" aria-hidden="true"></i> Limpar dados

                                            </button>

                                        </div>

                                    </form>
                                    <!-- End Contact Form -->
                                </div>
                            </div>
                            <!-- End content -->




                        </div>
                    </div>
                </div>
                <!-- Start Service Icon 1 -->
                <div class="col-md-6 col-sm-8 service-box service-center">
                    <div class="service-boxed">
                        <div class="service-icon" style="margin-top:-25px;">
                            <i class="fa fa-user icon-medium-effect icon-effect-1"></i>
                        </div>
                        <div class="service-content">
                            <p align="justify">
                                <h4><strong>Prezado usuário! </strong></h4>
                            <h4 align="justify">Está é uma página única para efetuar login ao sistema. </h4>
                                <h4 align="justify">Precisa apenas inserir suas credencias e o sistema irá identificar o seu perfil de forma automática.</h4>
                            </p>

                                <p>A segurança de seus dados é importante.</p>

                            </div>
                    </div>
                </div>
                <!-- End Service Icon 1 -->


                <!-- End Service Icon 2 -->



                <!-- End Service Icon 4 -->


            </div>
        <!-- Divider -->
        <div class="hr5" style="margin-top:25px; margin-bottom:55px;"></div>
    </div>





@endsection