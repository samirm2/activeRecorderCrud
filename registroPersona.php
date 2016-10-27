<!DOCTYPE html>
<html lang="ES">
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#ffa000">
	<meta name="author" content="Samir Miranda">
	<meta name="description" content="Registros de Clientes, Comidas Rapidas Moe's">
	<!--<link rel="icon" type="image/png" href="img/favicon/login.png">-->
	<title>Registro De Usuarios</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="css/style_input.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="css/alertify.min.css">
	<link rel="stylesheet" href="css/default.min.css">
</head>

<body bgcolor="#eeeeee">
	<div class="">
		<div class="row">
			<div class="col s12 l6 offset-l3 m8 offset-m2">
				<div class="card-panel" style="margin-top: 30px">
				<!--<form method="" action="">-->
					<a href="login.php" class="btn-floating grey lighten-1 waves-effect waves-light right"><i class="material-icons small">exit_to_app</i></a>
				
					<div class="row"></div>
					
					<!--<div class="divider"></div>-->
				<div class="row">
					<div class="input-field col s10 m6 l5 offset-l1">
						<i class="material-icons prefix">fingerprint</i>
						<input type="number" name="cedula" id="inputCedula" required autofocus="true" length="11" min="1">
						<label for="inputCedula">*Cedula</label>
					</div>
				</div>
				<div class="">
					<div class="input-field col s10 l5 m6 offset-s1 offset-l1">
						<i class="material-icons prefix">person_outline</i>
						<input type="text" name="nombre" id="inputNombres" required length="20">
						<label for="inputNombres">*Nombres</label>
					</div>
					<div class="input-field col s10 m6 l5">
						<i class="material-icons prefix">person</i>
						<input type="text" name="apellidos" id="inputApellidos" required length="20">
						<label for="inputApellidos">*Apellidos</label>
					</div>
					<div class="input-field col s10 m6 l5 offset-s1 offset-l1">
						<i class="material-icons prefix">bubble_chart</i>
						<input type="date" class="datepicker" name="fecha" id="inputNaci">
						<label for="inputNaci">Fecha De Nacimiento</label>
					</div>
					<div class="input-field col s10 m6 l5">
						<i class="material-icons prefix">mail</i>
						<input class="validate" type="email" name="correoe" id="inputEmail" required length="35">
						<label for="inputEmail" data-error="Escriba Un Correo Electronico Valido">*Correo Electronico</label>
					</div>
					<div class="input-field col s10 m6 l5 offset-s1 offset-l1">
						<i class="material-icons prefix">description</i>
						<input type="text" name="direccion" id="inputDireccion" required length="50">
						<label for="inputDireccion">Dirección</label>
					</div>
					<div class="input-field col s10 m6 l5">
						<i class="material-icons prefix">phone</i>
						<input type="number" class="validate" name="telefono" id="inputTelefono" length="10" min="1">
						<label for="inputTelefono" data-error="Escriba Un Numero De Telefono Valido">*Telefono</label>
					</div>
				<div class="row">
					<div class="input-field col s10 m6 l5 offset-s1 offset-l1">
						<i class="material-icons prefix">account_circle</i>
						<input type="text" name="usuario" id="inputUsuario" length = "12">
						<label for="inputUsuario">*Usuario</label>
					</div>
					<!--<div class="input-field col s5">
						<input type="text" name="usuario" id="inputUsuario">
						<label for="inputUsuario">Usuario</label>
					</div>-->
				</div>
					<div class="input-field col s10 m6 l5 offset-s1 offset-l1">
						<i class="material-icons prefix">label_outline</i>
						<input type="password" name="contrasena" id="inputContrasena" length="20">
						<label for="inputContrasena">*Contraseña</label>
					</div>
					<div class="input-field col s10 m6 l5">
						<i class="material-icons prefix">label</i>
						<input type="password" name="contrasena2" id="inputContrasena2" length="20" class="validate">
						<label for="inputContrasena2" data-error="Las Contraseñas No Coinciden" data-success="exito">*Repita Contraseña</label>
					</div>

						<input type="hidden" id="inputTipo" name="tipoUser" value="C"> <!--Campo oculto para el tipo de usuario-->
					
					<div class="input-field col s12 m10 l10 offset-l1">
						<input class="filled-in" type="checkbox" name="acepto" id="chkAcepto">
						<label for="chkAcepto"><a id="condiciones" href="#">Acepto los terminos y condiciones</a></label>
					</div>
					
					<div class="row"></div>
					
					<div class="row">
						<div class="col s6 l6 offset-s3 offset-l3">
							<button id="btnRegistrar" class="col s12 waves-effect waves-light btn amber">Registrar</button>	
						</div>
					</div>
					<h6 class="red-text">Los campos con * son Obligatorios</h6>
				<!--</form>-->
				</div>
			</div>
		</div>
	</div>

<div id="mdlCondi" class="modal modal-fixed-footer">
	<div class="modal-content">
		<h4 class="center">Terminos Y Condiciones</h4>
		<div class="divider"></div>
		<p class="flow-text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p class="flow-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
	<div class="modal-footer">
		<a href="#" class="modal-action modal-close btn-flat">Acepto</a>
	</div>
</div>

<!--scripts-->
<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/jsRegistrar.js"></script>
<script src="js/inits.js"></script>
<script src="js/alertify.min.js"></script>
</body>
</html>		