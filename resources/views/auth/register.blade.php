@extends('layouts.home-cotagil')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastro de usuário</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}

                       <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nome</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Endereço de email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('perfil') ? ' has-error' : '' }}">
                            <label for="perfil" class="col-md-4 control-label">Perfil de usuário</label>

                            <div class="col-md-6">
                               <select id="perfil" type="text" class="form-control" name="perfil" value="{{ old('perfil') }}" autofocus>
                                    <option value="">Escolha uma opção!</option>
                                    <option value="2">Sindico</option>
                                    <option value="3">Fornecedor</option>
                                </select>
                                @if ($errors->has('perfil'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('perfil') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('condominio') ? ' has-error' : '' }}">
                            <label for="condominio" class="col-md-4 control-label">Nome do condominio</label>

                            <div class="col-md-6">
                                <input id="condominio" type="text" class="form-control" name="condominio" value="{{ old('condominio') }}" autofocus>

                                @if ($errors->has('condominio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('condominio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('nomefantazia') ? ' has-error' : '' }}">
                            <label for="nomefantazia" class="col-md-4 control-label">Nome de fantasia:</label>

                            <div class="col-md-6">
                                <input id="nomefantazia" type="text" class="form-control" name="nomefantazia" value="{{ old('nomefantazia') }}" autofocus placeholder="" >

                                @if ($errors->has('nomefantazia'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nomefantazia') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <!--

                        <div class="form-group{{ $errors->has('documento') ? ' has-error' : '' }}">
                            <label for="documento" class="col-md-4 control-label">Informe o nº do documento:</label>

                            <div class="col-md-6">
                                <input id="documento" type="text" class="form-control" name="documento" value="{{ old('documento') }}" autofocus placeholder="cpf ou cnpj" >

                                @if ($errors->has('documento'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('documento') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('condominio') ? ' has-error' : '' }}">
                            <label for="condominio" class="col-md-4 control-label">Nome do condominio</label>

                            <div class="col-md-6">
                                <input id="condominio" type="text" class="form-control" name="condominio" value="{{ old('condominio') }}" autofocus>

                                @if ($errors->has('condominio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('condominio') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                            -->
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">senha</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirma senha</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Cadastra usuário
                                </button>
                                <button type="reset" class="btn btn-primary">
                                    Limpar dados
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
