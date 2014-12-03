<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Registration</title>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}
	{{HTML::style('bootstrap/css/estilos.css')}}
</head>
<body>
	<br>
	<div class="container">
		{{ Form::open(array('url' => 'register')) }}
		<div class="row centered-form">
			<div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title" class="dark-grey">Registro</h3> <small>My Task</small></h3>
					</div>
					<div class="panel-body">
						<form role="form">
							<div class="form-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								{{Form::text('user_person', Input::old('user_person'), array('placeholder' => 'Usuario', 'class' => 'form-control', 'required' => 'true'))}}                                 
							</div>
							<div class="form-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								{{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
							</div>
							<div class="col-sm-12 controls">
								{{ Form::submit('Agregar', array())}}
								{{ Form::close() }}
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>