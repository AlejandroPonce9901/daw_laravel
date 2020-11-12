<?php
  include "conexion.php";
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alta de Producto</title>
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
                        <span style="color: #e04000; font-family: rochesterregular, serif; font-size: 55px; line-height: 50px;">Alta nuevo producto</span>
                    </h1>
                    
                </div>



<div class="todo">
  
  
  
  <div id="contenido">
    <?php include'navbar.php'; ?>
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Ingresar</h1> </span>
  		<br>
	  <form action="nuevo_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  		<label>cantidad: </label>
  		<input type="text" id="cantidad" name="cantidad"><br>
  		
  		<label>producto: </label>
  		<input type="text" id="producto" name="producto" ><br>
  		
  		<label><p>Descripcion</p><p>o Modelo</p> </label>
  		<textarea style="border-radius: 10px;" rows="3" cols="50" name="modelo" ></textarea><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	

</div>


</body>
</html>