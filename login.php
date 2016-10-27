<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- etiqueta responsive mobile -->
	<meta name="theme-color" content="#689f38">	
	<link rel="icon" type="image/png" href="https://cdn2.iconfinder.com/data/icons/snipicons/500/login-64.png">
	<title>Iniciar Sesión</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body bgcolor="#eeeeee">
    <div class="row">
	<div class="col s12  l4 offset-l4 m6 offset-m3">
            <div class="card-panel" style="margin-top: 30px">
		<div class="row">
                    <div class="col s4 l4 m4 offset-s4 offset-l4 offset-m4">
			<img class="circle responsive-img" src="img/user.jpg">
                    </div>
		</div>
        	<div class="divider"></div>	
                <div class="input-field col s10 offset-s1">
                    <input type="text" name="user" id="textIdentificacion" required autofocus="true">
                    <label for="textIdentificacion">Usuario</label>
                </div>
		<div class="input-field col s10 offset-s1">
                    <input type="password" name="pass" id="textPass" required>
                    <label for="textPass">Contraseña</label>
		</div>
                <div class="row"></div>
		<div class="col s6 l6 offset-s3 offset-l3">
                    <button id="btningresar" class="col s12 waves-effect waves-light btn indigo">Ingresar</button>	
		</div>
		<div class="row"></div>
            </div>
	</div>
    </div>
<!--scripts-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script>
    $('#btningresar').click(function(){
        iniciarSesion();
    });
    $('#textPass').keydown(function(e){
       //alert(e.which); 
       if(e.which == 13){
           iniciarSesion();
       }
    });
    function iniciarSesion(){
        $user = $('#textIdentificacion').val();
	$pass = $('#textPass').val();
		
	if ($user == '' && $pass == '') {
            alert('Campos Vacios');
        }else if ($user.length > 0  && $pass == '') {
            alert('Campo Contraseña Vacio');
	}else if (($user == 'root' || $user == 'ROOT') && $pass == 'xxx') {
            window.location.href = 'main.php';
	}else{
            alert('Credenciales Incorrectas');	
	}
    }
</script>
</body>
</html>		