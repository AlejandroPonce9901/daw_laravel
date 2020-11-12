<!DOCTYPE html>
<html>
<head>
	<!-- tags meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="description" content="descripcion de 150 caracteres">
	<title>LOGIN</title>
	<!-- icono de pestaña -->
	<link rel="shortcut icon" type="image/png" href="vista/img/icon_pestaña.png">
	<!-- iconos del sitio -->
	<link rel="stylesheet" href="vista/iconos/style.css">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="vista/css/estilo_login.css">
</head>
<body> 
	<!--"BORRAR" background="images/.jpg"style="max-width:100%;width:100;height:auto;background-repeat:no-repeat; background-position:center" bgproperties="fixed">-->

	<!--<center><div class="tit">-->
	<form action="validar.php" method="post">
		<h2>Inicio de sesión</h2>

		
		

		<!-- BORRAR solo es controno de tabla de login y passw <table border="0">-->
		<div class="contenedor">
		<div class="con-icon"><span class="icon-user-check"></span></div>

		<div class="con-input"><input type="text" placeholder="Nombre de usuario" name="user"></div>
		</div>
		<div class="contenedor">
			<div class="con-icon"><span class="icon-key"></span></div>
			<div class="con-input"><input type="password" placeholder="Contraseña" name="pass"></div>
		</div>



		<!--<tr><td><label style="font-size: 14pt;color: #000000;"><b>Usuario: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt;color: #000000;"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td> -->

			<input class="btn btn-primary" type="submit" value="Aceptar">

			<!-- ICONO DE HOME DIRECCIONADO A PAGINA PRINCIPAL-->
		<div class="otros">
			<a href="../index.html" title="Inicio"><span class="icon-home3"></span></a>
		</div>
		<!-- ICONO DE HOME DIRECCIONADO A PAGINA DE REGISTRARSE-->
		<div class="otros">
			<a href="form.php" title="registrar"><span class="icon-file-text"></span></a>
		</div>

			<!--<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table> -->
		</form>
</body>
</html>
<!-- formulario registro -->
