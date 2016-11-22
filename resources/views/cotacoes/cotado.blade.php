
@extends('partials.test')
@section('content')
    <div class="container">
        <h2 class="classic-title"><span>Acompanhar cotação</span></h2>
        <div class="row">
            <div class="panel-body">
                <div class="dataTable_wrapper">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                        <tr>
                            <th>FORNECEDOR</th>
                            <th>PRODUTO</th>
                            <th>VALOR UNIT.</th>
                            <th>QUANT</th>
                            <th>VALOR TOTAL</th>
                            <th>DATA/COTAÇÃO</th>
                            <th>AÇÕES</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cotados ->users as $user)
                                <tr class="odd gradeX">
                                <td>{{$user->name}}</td>
                                <td>{{$cotados->produto->nome}} {{$cotados->produto->descricao}}</td>
                                <td>{{$user->pivot->preco}} R$</td>
                                <td>{{$cotados->quantidade}}</td>
                                <td>{{$user->pivot->preco*$cotados->quantidade}} R$</td>
                                <td>{{$user->pivot->created_at}}</td>
                                <td class="center">
                                    <div class="button-side">
                                        <a href="#" class="btn-system border-btn btn-large"><i class="fa fa-trash" aria-hidden="true"></i> Recusar</a>
                                        <a href="#" class="btn-system border-btn btn-large btn-gray"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection