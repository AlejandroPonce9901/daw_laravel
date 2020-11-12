<?php session_start(); ?>
<html>
	<head>
		<title>Formulario de Registro</title>
		<link href="css2/bootstrap.min.css" rel="stylesheet" media="screen"> 
  <link href="css2/estilo.css" rel="stylesheet" media="screen"> 
  <link href="css2/styles2.css" rel="stylesheet" media="screen"> 
  <link href="css2/bootstrap.css" rel="stylesheet" media="screen"> 
	</head>
	<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Inicio</a></li>
        <li><a href="conocenos.php">Conocenos</a></li>
        <li><a href="servicios.php">Servicios</a></li>
        <li><a href="contactanos.php">Contactanos</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">

        <li><a href=""><span ></span> Iniciar Sesión: </a></li>
        <li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span> Usuario </a></li>
        <li><a href="index2.php"><span class="glyphicon glyphicon-log-in"></span> Administrador </a></li>
      </ul>

    </div>
  </div>
</nav>
<br><br><br><br>




	
<div class="container">
<div class="row">
<div class="col-md-6">
		<h2>Login</h2>
		<br><br><br><br>

		<form role="form" name="login" action="php/login.php" method="post">
		  <div class="form-group">
		    <label for="username">Nombre de usuario o email</label>
		    <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
		  </div>
		  <div class="form-group">
		    <label for="password">Contrase&ntilde;a</label>
		    <input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
		  </div>

		  <button type="submit" class="btn btn-default">Acceder</button>
		</form>
</div>
</div>
</div>
		<script src="js/valida_login.js"></script>
	</body>


<br><br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br>



    
  




<footer class="container-fluid text-center">
  <div id="social">
<span style="color: #fff; font-family: rochesterregular, serif; font-size: 25px; line-height: 20px;">Redes Sociales:</span>
<br>
<br>

    <a href="http://www.whatsapp.com"> <img src="imagenes/imagen2.png"> </a>
    <a href="http://www.facebook.com"> <img src="imagenes/imagen3.png"> </a>
    <a href="http://www.youtube.com"> <img src="imagenes/imagen4.png"> </a>
    <a href="http://www.skype.com.com"> <img src="imagenes/imagen5.png"> </a>
</div>
</footer>


</html>