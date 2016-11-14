<div class="row">
    <div class="col-md-10">
        <!-- Start Contact Form -->
        <form class="contact-form" id="contact-form" role="form" method="POST" action="{{ url('cotacao/store', '1') }}">
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

            <div class="form-group">

                <button type="submit" class="btn btn-primary">
                    Confirmar
                </button>

            </div>
        </form>
        <!-- End Contact Form -->
    </div>
</div>
<!-- End content -->



