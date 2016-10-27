<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
        <title>Menú Principal</title>
        <link rel="icon" type="png/image" href="https://cdn3.iconfinder.com/data/icons/luchesa-vol-9/128/Html-128.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body bgcolor="#eeeeee">
        <nav class="indigo hide-on-large-only">
            <ul>
                <li><a id="btnMenu" href="#!" data-activates="navMovil"><i class="material-icons">menu</i></a></li>
            </ul>
        </nav>
        <ul id="navMovil" class="side-nav fixed">
            <li class="userView">
                <img class="background" src="img/fondo.png">
                <img class="responsive-img circle" src="img/user.jpg">
                <span class="name white-text">Samir Miranda</span>
                <span class="email white-text">Saanm2@gmail.com</span>
            </li>
            <li><a id="btnRegistro">Registrar<i class="material-icons left">class</i></a></li>
            <li><a id="btnGestion">Gestionar Personas<i class="material-icons left">person_pin</i></a></li>
            <li class="divider"></li>
            <li><a href="login.php">Cerrar Sesión<i class="material-icons left">undo</i></a></li>
        </ul>
    
        <div id="dvRegistro">
            <div class="row">
		<div class="col s12 l6 offset-l3 m8 offset-m2">
                    <div class="card-panel" style="margin-top: 30px">
			<!--<form method="" action="">-->

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
				<div class="col s6 l6 offset-s3 offset-l3">
                                    <button id="btnRegistrar" class="col s12 waves-effect waves-light btn indigo">Registrar</button>	
				</div>
                            </div>
                            <span class="red-text">Los campos con * son Obligatorios</span>
                            <span class="right" id="spnMensaje"><img src="img/loading.gif" width="24"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="dvGestion" class="container">
            <div class="row">
                <div class="col">
                    <div class="card-panel">
                        <table id="tablaPersonas" class="centered bordered striped">
                            <thead>
                                <tr>
                                    <th>Cedula</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Fecha Nacimiento</th>
                                    <th>Email</th>
                                    <th>Dirección</th>
                                    <th>Teléfono</th>
                                    <th>Opción</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="fixed-action-btn hide-on-med-and-down">
            <button class=" indigo btn-floating btn-large"><i class="material-icons">settings</i></button>
            <ul>
                <li><a id="btnOcultar" class="btn-floating white"><i class="material-icons black-text">flip_to_front</i></a></li>
            </ul>
        </div>
        
        <div id="mdlPersonas" class="modal">
            <div class="modal-content">
                <div class="row">
<!--		<div class="col s12 l6 offset-l3 m8 offset-m2">-->
<!--                    <div class="card-panel" style="margin-top: 30px">-->
			<!--<form method="" action="">-->

				<!--<div class="divider"></div>-->
			<div class="row">
                            <div class="input-field col s10 m6 l5 offset-l1">
        			<i class="material-icons prefix">fingerprint</i>
                                <input type="number" name="cedula" id="inputCedul" readonly="true">
                    		<label for="inputCedul">*Cedula</label>
                            </div>
			</div>
			<div class="">
                            <div class="input-field col s10 l5 m6 offset-s1 offset-l1">
				<i class="material-icons prefix">person_outline</i>
				<input type="text" name="nombre" id="inputNombre" required length="20">
				<label for="inputNombre">*Nombres</label>
                            </div>
                            <div class="input-field col s10 m6 l5">
				<i class="material-icons prefix">person</i>
				<input type="text" name="apellidos" id="inputApellido" required length="20">
				<label for="inputApellido">*Apellidos</label>
                            </div>
                            <div class="input-field col s10 m6 l5 offset-s1 offset-l1">
				<i class="material-icons prefix">bubble_chart</i>
				<input type="date" class="datepicker" name="fecha" id="inputNac">
				<label for="inputNac">Fecha De Nacimiento</label>
                            </div>
                            <div class="input-field col s10 m6 l5">
				<i class="material-icons prefix">mail</i>
				<input class="validate" type="email" name="correoe" id="inputEmai" required length="35">
				<label for="inputEmai" data-error="Escriba Un Correo Electronico Valido">*Correo Electronico</label>
                            </div>
                            <div class="input-field col s10 m6 l5 offset-s1 offset-l1">
				<i class="material-icons prefix">description</i>
				<input type="text" name="direccion" id="inputDireccio" required length="50">
				<label for="inputDireccio">Dirección</label>
                            </div>
                            <div class="input-field col s10 m6 l5">
				<i class="material-icons prefix">phone</i>
				<input type="number" class="validate" name="telefono" id="inputTelefon" length="10" min="1">
				<label for="inputTelefon" data-error="Escriba Un Numero De Telefono Valido">*Telefono</label>
                            </div>
                        </div>
                    </div>
                </div>
<!--            </div>-->
<!--            </div>-->
            <div class="modal-fixed-footer">
                <a id="btnModificar" class="btn-flat right">Modificar</a>
            </div>
        </div>
        
    </body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
<script>
    $(function(){
       $('#btnMenu').sideNav();
       $('.datepicker').pickadate({
           format:'yyyy/mm/dd'
       });
       $('#dvRegistro').hide();
       $('#dvGestion').hide();
       $('#spnMensaje').hide();
       getPersonas();
    });
    var bandera = true;
    $('#btnOcultar').click(function(){
        if(bandera){
            $('#navMovil').fadeOut('slow');
        }else{
            $('#navMovil').fadeIn('slow');
        }
        bandera = !bandera;
    });
    $('#btnRegistro').click(function(){
       $('#dvRegistro').toggle(function(){
           $('#dvGestion').hide();
       });
       $('#btnMenu').sideNav('hide');
    });
    $('#btnGestion').click(function(){
       $('#dvGestion').toggle(function(){
           $('#dvRegistro').hide();
       });
       $('#btnMenu').sideNav('hide');
    });
    $('#btnRegistrar').click(function(){
       var object = {'ced':$('#inputCedula').val(),
           'nombr': $('#inputNombres').val(),
           'apell': $('#inputApellidos').val(),
           'fecha': $('#inputNaci').val(),
           'email': $('#inputEmail').val(),
           'dir': $('#inputDireccion').val(),
           'tel': $('#inputTelefono').val(),
           'op': 1
        }
        $.ajax({
           type: 'POST',
           url: "personasClass.php",
           dataType: 'json',
           data: object,
           beforeSend: function () {
                $('#spnMensaje').show();
            },
           success: function(rta){
               console.log(rta);
                if(rta.ban){
                   alert('Guardado Correctamente');
                   $('#spnMensaje').hide();
                   getPersonas();
               }else{
                   alert(rta.error);
                   $('#spnMensaje').hide();
               }
           }
        });
    });
    
    function getPersonas(){
        $.ajax({
           type: 'POST',
           url: "personasClass.php",
           dataType: 'json',
           data: {'op':0},
           success: function(rta){               
                if(rta.ban){
                   $('#tablaPersonas').html('<thead><tr><th>Cedula</th><th>Nombres</th><th>Apellidos</th><th>Fecha Nacimiento</th><th>Email</th><th>Dirección</th><th>Teléfono</th><th colspan=2>Opción</th></tr></thead>');
                   for(a in rta.datos){
                    $('#tablaPersonas').append('<tr><td>'+rta.datos[a].cedula+'</td><td>'+rta.datos[a].nombres+'</td><td>'+rta.datos[a].apellidos+'</td><td>'+rta.datos[a].fnacimiento+'</td><td>'+rta.datos[a].email+'</td><td>'+rta.datos[a].direccion+'</td><td>'+rta.datos[a].telefono+'</td><td><button id="'+rta.datos[a].cedula+'" class="btn-floating amber btnModif"><i class="material-icons">edit</i>"</button></td><td><button id="'+rta.datos[a].cedula+'" class="btn-floating red btnElim"><i class="material-icons">delete</i>"</button></td><tr>');
                   }
               }else{
                   Materialize.toast('No Existen registros',2000);
               }
           }
        });
    }
 
    $('#tablaPersonas').on('click','.btnModif',function(){
        //Mostrar en el modal los datos de la persona a modificar y ya
        $.ajax({
           type: 'POST',
           url: "personasClass.php",
           dataType: 'json',
           data: {'ced':$(this).attr('id'),'op':4},
           success: function(rta) {
            $('#inputCedul').val(rta.cedula);
            $('#inputNombre').val(rta.nombres);
            $('#inputApellido').val(rta.apellidos);
            $('#inputNac').val(rta.fnacimiento);
            $('#inputEmai').val(rta.email);
            $('#inputDireccio').val(rta.direccion);
            $('#inputTelefon').val(rta.telefono);
            Materialize.updateTextFields();
           }
        });
        $('#mdlPersonas').openModal();
    });
    
    $('#btnModificar').click(function(){
        var object = {'ced': $('#inputCedul').val(),
           'nombr': $('#inputNombre').val(),
           'apell': $('#inputApellido').val(),
           'fecha': $('#inputNac').val(),
           'email': $('#inputEmai').val(),
           'dir': $('#inputDireccio').val(),
           'tel': $('#inputTelefon').val(),
           'op': 3
        }
        $.ajax({
           type: 'POST',
           url: "personasClass.php",
           dataType: 'json',
           data: object,
           success: function(rta){
               if(rta.ban){
                   alert('Datos Actualizados Correctamente');
                   getPersonas();
                   $('#mdlPersonas').closeModal();
               }else{
                   alert('error');
               }
           }
       });
    });
    
    $('#tablaPersonas').on('click','.btnElim',function(){
        $.ajax({
           type: 'POST',
           url: "personasClass.php",
           dataType: 'json',
           data: {'ced':$(this).attr('id'),'op':2},
           success: function(rta){
               if(rta.ban){
                   alert('Persona Eliminada Correctamente');
                   getPersonas();
               }else{
                   alert('error');
               }
           }
       });
        //alert('Eliminar ->'+$(this).attr('id'));
    });
</script>
</html>
