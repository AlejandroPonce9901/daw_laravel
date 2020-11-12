<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contactanos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <li><a href="index2.php"><span class="glyphicon glyphicon-log-in"></span> Iniciar Sesión </a></li>
      </ul>

    </div>
  </div>
</nav>
<br><br><br><br>




<?php session_start(); ?>

  <body>
  
<div class="container">
<div class="row">
<div class="col-md-6">
    <h2>Contactanos</h2>
    <br><br><br>
    
    

    <form role="form" name="registro" action="php/registro.php" method="post">
      <div class="form-group">
        <label for="username">Nombre</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Nombre">
      </div>
      <div class="form-group">
        <label for="fullname">Apellidos</label>
        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Apellidos">
      </div>
      <div class="form-group">
        <label for="email">Correo Electronico</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico">
      </div>
      <div class="form-group">
        <label for="password">Comentario</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="comentario">
      </div>
      

      <button type="submit" class="btn btn-default">Enviar</button>
    </form>
    </div>
    </div>
    </div>

    <script src="js/valida_registro.js"></script>
  </body>
</html>


    </body>


<br><br><br><br><br><br>
<br><br><br><br><br><br><br>



    
  




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