<!DOCTYPE html>
<html lang="pt br">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="Controle de Vendas" content="">
		<meta name="Hudson Soares" content="">
		<title>{{ $title }}</title>
		<link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">

	</head>
	<body>
		<div id="wrapper">
    		@include('template.nav')
			@yield('content')
			@include('template.footer')
		</div>
 	</body>
</html>
