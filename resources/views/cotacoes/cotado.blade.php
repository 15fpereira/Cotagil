
@extends('partials.home_fornecedor')
@section('content')
    <div class="container">
        <h2 class="classic-title"><span>Minhas cotações</span></h2>

        <div class="row">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>Nome do produto</th>
                            <th>Descrição do produto</th>
                            <th>Valor R$</th>
                            <th>Prazo(s)</th>
                            <th>Ações</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cotado->users as $user)
                            @if($cotado == $cotacoe->pivot->cotacao_id)
                            <tr class="odd gradeX">
                                <td>{{$user->produto->nome}}</td>
                                <td>{{$user->produto->descricao}}</td>
                                <td>{{$user->pivot->preco}} R$</td>
                                <td>{{$user->pivot->created_at}}</td>
                                <td class="center">
                                    <div class="button-side">
                                        <a href="#" class="btn-system border-btn btn-large"><i class="fa fa-trash" aria-hidden="true"></i> Recusar</a>
                                        <a href="#" class="btn-system border-btn btn-large btn-gray"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</a>
                                    </div>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>

        </div>

    </div>
@endsection