@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Voce esta logado !!!</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-2">
                            <div class="panel-heading"><strong>Escolha o estilo da busca de produtos:</strong></div>
                        </div>
                    </div>
                    <div class="row">
                       <div class="col-md-6">
                            <a class="btn btn-primary" href="{{ url('/produtos/listagem') }}">Algolia Search + backend Laravel</a>
                       </div>
                       <div class="col-md-6">
                            <a class="btn btn-primary" href="{{ url('/produtos/angular/listagem') }}">Algolia Search + angularJs (one key stroke)</a>
                       </div>
                    </div>                       
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
