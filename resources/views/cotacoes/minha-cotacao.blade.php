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
                            <th>Marca</th>
                            <th>Prazo(s)</th>
                            <th>Data/Cotação</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user->cotacoes as $cotacoe)
                            <tr class="odd gradeX">
                                <td>{{$cotacoe->produto->nome}}</td>
                                <td>{{$cotacoe->produto->descricao}}</td>
                                <td>{{$cotacoe->pivot->preco}} R$</td>
                                <td>{{$cotacoe->pivot->marca}}</td>
                                <td>{{$cotacoe->pivot->prazo}}</td>
                                <td>
                                    <?php
                                    /*
                                        $data = explode(' ', $cotacoe->pivot->created_at);
                                        $d = explode('-', $data[0]);
                                        echo $d[2]."/".$d[1]."/".$d[0]." ".$data[1];*/
                                    ?>    
                                    {{$cotacoe->pivot->created_at}}
                                </td>
                                <td>
                                    @if ($cotacoe->pivot->status == 0) 
                                        Recusado
                                    @else
                                        @if ($cotacoe->pivot->status == 1)
                                            Em cotação
                                        @else 
                                            Comprado
                                        @endif
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