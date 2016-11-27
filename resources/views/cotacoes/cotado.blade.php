
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
                            <th>STATUS</th>
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
                                <td>
                                    @if ($user->pivot->status == 0) 
                                        Recusado
                                    @else
                                        @if ($user->pivot->status == 1)
                                            Em cotação
                                        @else 
                                            Comprado
                                        @endif
                                    @endif
                                <td class="center">
                                    @if ($user->pivot->status == 1)
                                        <div class="button-side">
                                            <a href="/usuario/recusar/{{$user->pivot->id}}" class="btn-system border-btn btn-large"><i class="fa fa-trash" aria-hidden="true"></i> Recusar</a>
                                            <a href="/usuario/comprar/{{$user->pivot->id}}" class="btn-system border-btn btn-large btn-gray"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</a>
                                        </div>
                                    @endif
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