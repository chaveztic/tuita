@extends('layout.layout')
@section('content')
<h3>Registrarse</h3>
{!! Form::open(array('url' => 'auth/signup','class' =>'col-md-5')) !!}
<div class="form-group">
	<label for="name">Nombre</label>
	<input type="text" name="name" class="form-control" required>
</div>
<div class="form-group">
	<label for="email">Email</label>
	<input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
	<label for="username">Username</label>
	<input type="text" name="username" class="form-control" required>
</div>
<div class="form-group">
	<label for="password">Contraseña</label>
	<input type="password" name="password" class="form-control" required>
</div>	
<button type="submit" class="btn btn-primary">Registrase</button>
{!! Form::close() !!}
@stop