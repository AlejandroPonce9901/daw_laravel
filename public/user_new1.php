<?php
  session_start();
  //$_SESSION['usuario'];

  include "conexion.php";


?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta usuario</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css2/bootstrap.css" rel="stylesheet" type="text/css">


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
        <li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Salir </a></li>
      </ul>

    </div>
  </div>
</nav>

<div class="container">
            <div class="row">
                <div class="jumbotron ">
                    <h1 class="two">
                        <span style="color: #e04000; font-family: rochesterregular, serif; font-size: 55px; line-height: 50px;">Nuevo Usuario</span>
                    </h1>
                    
                </div>

<div class="todo">
  
  
  
  <div id="contenido">
    <?php include'navbar.php'; ?>
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
       <span> <h1>Ingresar</h1> </span>
      <br>

    <form action="user_new2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
         
           <div>

          <div>
            <div class="row">
              <div class="col-xs-3">
              <label>Nombre:</label>
              <input type="text" name="nom" id="nom" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Usuario:</label>
              <input type="text" name="usr" id="usr" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Password:</label>
              <input type="password" name="pass" id="pass" class="form-control" >
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Tipo de Usuario:</label>
              <select name="tipo" id="tipo" class="form-control">
                  <option>ADMINISTRADOR</option>
                  <option>INVITADO</option>
                </select>
              </div>
            </div>


          </div>
          
          <br>
          <button type="submit" class="btn btn-success">Guardar</button>
         </form>
    </div>
    
  </div>
  
  

</div>


</body>
</html>
