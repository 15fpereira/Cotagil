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
                            </div>

                    </div>

                    <div class="form-group">

                            <button type="submit" class="btn btn-primary">
                                Entrar no sistema
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                                Esqueceu a senha? Click aqui!
                            </a>

                    </div>
                </form>
                <!-- End Contact Form -->
            </div>
        </div>
<!-- End content -->



