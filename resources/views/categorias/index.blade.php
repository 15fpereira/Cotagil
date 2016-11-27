@extends('layouts.app-cotagil')
@section('content')
    <div class="container">
        <h2 class="classic-title"><span>Lista de categorias de produtos</span></h2>
        <div class="row">
            <div class="dataTable_wrapper">
                <table class="table table-striped table-bordered table-hover" id="dataTables">
                    <thead>
                    <tr>
                        <th width="10%">Código:</th>
                        <th width="70%">nome:</th>
                        <th width="20%;">Ações:</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categorias as $categoria)
                        <tr class="">
                            <td>{{$categoria->id}}</td>
                            <td>{{$categoria->nome}}</td>
                            <td class="center">
                                <div class="button-side">
                                    <a href="#" class="btn-system border-btn btn-large"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                    <a href="#" class="btn-system border-btn btn-large btn-gray"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
