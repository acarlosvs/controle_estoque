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

    <div class="panel-heading">Buscar Produtos Por Filial</div>

    <div class="panel-body">
        <form class="form-horizontal" method="POST" action="{{ url('/estoque/buscar-produtos') }}">
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

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Buscar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection