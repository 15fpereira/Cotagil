
@extends('layouts.app-cotagil')
@section('content')
    <div class="container">
        <h2 class="classic-title"><span>Cadastro de produtos</span></h2>
        <div class="row sidebar-page">
            <div class="col-md-8 page-content">


                <!-- Start Contact Form -->
                <form class="contact-form" id="contact-form" role="form" method="POST" action="{{route('categoria.store')}}">
                    {{ csrf_field() }}
                   <div class="controls form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <input id="nome" type="text" name="nome" value="{{ old('nome') }}" autofocus placeholder="Nome:">

                            @if ($errors->has('nome'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nome') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn btn-primary">
                            Salvar
                        </button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">
                            Ir para pedidos!
                        </a>

                    </div>
                </form>
                <!-- End Contact Form -->

            </div>


            <!--Sidebar-->
            <div class="col-md-4 sidebar right-sidebar">

                <!-- Categories Widget -->
                <div class="widget widget-categories">
                    <h4>Produtos/Categorias <span class="head-line"></span></h4>
                    <ul>
                        <li>
                            <a href="{{url('/produto')}}">Lista de produto</a>
                        </li>
                        <li>
                            <a href="{{url('/categoria')}}">Lista de categoria do produto</a>
                        </li>
                        <li>
                            <a href="{{url('/produto/create')}}">Cadastro de produto</a>
                        </li>
                        <li>
                            <a href="{{url('/categoria/create')}}">Cadastro de categoria de produto</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- End content -->

    </div>


@endsection