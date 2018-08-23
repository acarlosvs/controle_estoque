<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Estoque | @yield('title')</title>
	<link rel="shortcut icon" href="{{ asset('/assets/img/logo.ico') }}">
	<meta https-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">

	@yield('css')

</head>
<body>
	<nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('#') }}">
                    Controle de Estoque
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ url('/filial/cadastro') }}">Filiais</a></li>
                    <li><a href="{{ url('/estoque/cadastro-produtos') }}">Produto</a></li>
                    <li><a href="{{ url('/estoque/lista') }}">Estoque</a></li>
                    <li><a href="{{ url('/saida/registrar') }}">Saída</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
		          @yield('conteudo')
                </div>
            </div>
        </div>
	</div>
	
	<script src="{{asset('/js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>

	@yield('script')
	@yield('js-init')
</body>
</html>