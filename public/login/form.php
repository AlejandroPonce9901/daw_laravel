<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
		<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<title>Proyecto Lumina</title>
</head>
<body>
<!--- PONER UN FONDO A ESTA PAGINA <img src="background:url('../img/fondo_login.jpg')">-->
<CENTER>
<form method="post" action="" style="margin: 0 auto;" >
  <fieldset>
    <legend  style= "font-size: 18pt;color: #000000;"><b>Registro</b></legend><li>
    <div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Ingresa tu ID</b></label>
      <input type="number" name="dato" min="1" max="100">
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Ingresa tu nombre</b></label>
      <input type="text" name="nombre" class="form-control" placeholder="Ingresa tu nombre completo" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #000000;"><b>Ingresa tu nombre de usuario</b></label>
      <input type="text" name="user" class="form-control"  required placeholder="Ingresa nombre de usuario"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Ingrese su estatus </b></label>
      <input type="text" name="stat" class="form-control" required placeholder=" " />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Ingrese su area </b></label>
      <input type="text" name="ar" class="form-control" required placeholder=" " />
    </div>
<div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Ingrese su puesto </b></label>
      <input type="text" name="pues" class="form-control" required placeholder="puesto" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Ingrese fecha de ingreso </b></label>
      <input type="date" name="fech" class="form-control" required placeholder="fecha de ingreso" />
    </div>
    

    



    <div class="form-group">
      <label style="font-size: 14pt; color: #000000;"><b>Ingresa tu contraseña de usuario</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Repite tu contraseña de usuario</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>

    <div class="form-group">
      <label style="font-size: 14pt;color: #000000;"><b>Ingresa ID de huella</b></label>
      <input type="number" name="iddato" min="1" max="100">
    </div>
      
      
      
    </div>
   
    <input  class="btn btn primary" type="submit" name="submit" value="Registrarse"/>
    <a href="admin.php">Atras</a></li>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	</CENTER>
</body>
</html>