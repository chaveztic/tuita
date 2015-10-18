<!DOCTYPE html>
<html lang="es">
<head>
	<title>Twitter</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style>
		body { padding-top: 70px; }
	</style>
</head>
<body>
	<header>
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="navbar-left" style="font-size:21px">
				<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
				Inicio
			</div>
			<div class="navbar-form navbar-right">
				@if(Auth::check())
					<input type="text" name="buscar" placeholder="Buscar">
					{{Auth::user()->getNameOrUsername()}}
					<img src="{{Auth::user()->imagen}}" alt="" height="40" style="margin-right:20px;"/>
					<button class="btn btn-primary" style="margin-right:20px" 
					data-toggle="modal" data-target="#myModal">
						<span class="glyphicon glyphicon-pencil"></span> Publicar
					</button>
					<a href="{{ route('auth.signout') }}">
						<button class="btn btn-default">Cerrar Sesion</button>
					</a>
				@else
					<a href="{{ route('auth.signin') }}">
						<button class="btn btn-primary">Iniciar Sesion</button>
					</a>
					<a href="{{ route('auth.signup') }}">
						<button class="btn btn-success">Registrar</button>
					</a>
				@endif
			</div>
		</nav>
	</header>
	@yield('content')
</body>
</html>