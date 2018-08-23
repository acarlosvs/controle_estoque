@extends('layouts.template')

@section('css')
@stop

@section('script')
@stop

@section('js-init')
@stop

@section('title')
    Cadastrar Produtos
@stop

@section('conteudo')

    @include('partials.messages')

    <div class="panel-heading">Lista de Produtos Por Filial</div>

    <div class="panel-body">
            <table class='table table-responsive table-striped table-bordered table-condensed'>
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Produto</th>
                        <th>Filial</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produto_buscado as $produto)
                        <tr>
                            <td>{{ $produto->id }}</td>
                            <td>{{ $produto->nome }}</td>
                            <td>{{ $produto->filial_id }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection