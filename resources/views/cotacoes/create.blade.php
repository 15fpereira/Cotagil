@extends('partials.home_fornecedor')
@section('content')
    <div class="container">
        <h2 class="classic-title"><span>Realize a sua cotação</span></h2>
        <div class="row">
            <div class="col-md-6">
                <!-- Start Contact Form -->

                <form class="contact-form" id="contact-form" role="form" method="POST" action="{{url('pedido/cotacao/store',$cotacao)}}">
                    {{ csrf_field() }}
                    <div class="controls form-group{{ $errors->has('preco') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <input id="preco" type="text" name="preco" value="{{ old('preco') }}" autofocus placeholder="Valor:">

                            @if ($errors->has('preco'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('preco') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="controls form-group{{ $errors->has('marca') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <input id="marca" type="text" name="marca" value="{{ old('marca') }}" autofocus placeholder="Marca do produto:">

                            @if ($errors->has('marca'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('marca') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    <div class="controls form-group{{ $errors->has('prazo') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <input id="prazo" type="text" name="prazo" value="{{ old('prazo') }}" autofocus placeholder="Quantidade de dias para entregar:">

                            @if ($errors->has('prazo'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('prazo') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">

                        <button type="submit" class="btn-system border-btn btn-large">
                            <i class="fa fa-check-square-o" aria-hidden="true"></i> Confirmar
                        </button>
                        <button type="reset" class="btn-system border-btn btn-large btn-gray">
                            <i class="fa fa-times" aria-hidden="true"></i> Limpar dados

                        </button>
                    </div>
                </form>
                <!-- End Contact Form -->
            </div>
        </div>
    </div>
<!-- End content -->
@endsection