@extends('layouts.template')

@section('css')
@stop

@section('script')
@stop

@section('js-init')
@stop

@section('title')
    Cadastrar Filial
@stop

@section('conteudo')
    @include('partials.messages')

    <div class="panel-heading">Cadastro de Filial</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ url('/filial/cadastro') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('nome') ? ' has-error' : '' }}">
                <label for="nome" class="col-md-4 control-label">Nome</label>

                <div class="col-md-6">
                    <input id="nome" type="text" class="form-control" name="nome" value="{{ old('nome') }}" required autofocus>

                    @if ($errors->has('nome'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nome') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('cnpj') ? ' has-error' : '' }}">
                <label for="cnpj" class="col-md-4 control-label">CNPJ</label>

                <div class="col-md-6">
                    <input id="cnpj" type="text" class="form-control" name="cnpj" value="{{ old('cnpj') }}" required>

                    @if ($errors->has('cnpj'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cnpj') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection