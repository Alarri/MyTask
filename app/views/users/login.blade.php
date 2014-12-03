<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	{{HTML::style('bootstrap/css/bootstrap.min.css')}}
    {{HTML::style('bootstrap/css/estilos.css')}}
</head>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Ingrese</h3>
                    </div>
                    <div class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            @if ($errors->has())
                                <div class="alert-danger text-center" role="alert">
                                    <small>{{ $errors->first('email') }}</small>
                                    <small>{{ $errors->first('password') }}</small>
                                    <small>{{ $errors->first('invalid_credentials') }}</small>
                                </div>
                            @endif
                            {{ Form::open(array('url' => 'login')) }}
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                 {{Form::text('user_person', Input::old('user_person'), array('placeholder' => 'Usuario', 'class' => 'form-control', 'required' => 'true'))}}                                   
                            </div>
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        {{ Form::password('password', array('placeholder' => 'Contraseña', 'class' => 'form-control', 'required' => 'true')) }}
                                    </div>  
                                
                                <br>
                                <div class="col-sm-12 controls">
                                      {{ Form::submit('Login', array())}}
                                </div>                                
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                           No estas registrado?
                                        {{link_to("users/create", 'Registrarse', $attributes = array(), $secure = null);}}     
                                        </div>
                                    </div>
                                </div>    
                                
                                
                            {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
	
    

</body>
</html>










