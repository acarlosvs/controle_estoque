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

    <div class="panel-heading">Registrar Saída</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ url('/saida/registrar') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('filial_id') ? ' has-error' : '' }}">
                <label for="filial_id" class="col-md-4 control-label">Filial</label>

                <div class="col-md-6">
                    <select id="filial_id" type="text" class="form-control" name="filial_id" value="{{ old('filial_id') }}" required>
                        <option value="#">Selecione Uma Filial</option>
                        @foreach($filiais as $filial)
                            <option value="{{ $filial->id }}" @if(old('filial_id') == $filial->id) @endif>
                                {{ $filial->nome }}
                            </option>
                        @endforeach
                    </select>

                    @if ($errors->has('filial'))
                        <span class="help-block">
                            <strong>{{ $errors->first('filial_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('produto_id') ? ' has-error' : '' }}">
                <label for="produto_id" class="col-md-4 control-label">Produto</label>

                <div class="col-md-6">
                    <select id="produto_id" type="text" class="form-control" name="produto_id" value="{{ old('produto_id') }}" required>
                        <option value="#">Selecione Um Produto</option>
                        @foreach($produtos as $produto)
                            <option value="{{ $produto->id }}" @if(old('produto_id') == $produto->id) @endif>
                                {{ $produto->id }} - {{ $produto->nome }}
                            </option>
                        @endforeach
                    </select>

                    @if ($errors->has('filial'))
                        <span class="help-block">
                            <strong>{{ $errors->first('produto_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('quantidade') ? ' has-error' : '' }}">
                <label for="quantidade" class="col-md-4 control-label">Quantidade de Itens</label>

                <div class="col-md-6">
                    <input id="quantidade" type="text" class="form-control" name="quantidade" value="{{ old('quantidade') }}" required>

                    @if ($errors->has('quantidade'))
                        <span class="help-block">
                            <strong>{{ $errors->first('quantidade') }}</strong>
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