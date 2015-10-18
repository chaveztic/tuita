@extends('layout.layout')

@section('content')
<h3>Iniciar Sesion</h3>
	<div class="row">
		<div class="col-lg-4 panel">
			{!! Form::open(array('url' => 'auth/signin','class'=>'panel-body')) !!}
				<div class="form-group">
					<label for="email" class="control-label">Email</label>
					<input type="text" name="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="password" class="control-label">Password</label>
					<input type="password" name="password" class="form-control" id="password">
				</div>
				<div class="checkbox">
					<label>
						<input type="checkbox" name="remember"> Remember me
					</label>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" type="submit">Iniciar</button>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@stop