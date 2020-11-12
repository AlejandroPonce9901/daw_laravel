<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css2/bootstrap.min.css" rel="stylesheet" media="screen">

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
                        <span style="color: #e04000; font-family: rochesterregular, serif; font-size: 55px; line-height: 50px;">Monitoreo</span>
                    </h1>
                    
                </div>



<div class="todo">
  
  
  
  <div id="contenido">
    <?php include'navbar.php'; ?>
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>No.</th>
  			<th>cantidad</th>
  			<th>Producto</th>
  			<th>modelo</th>
  			<th> <a href="nuevo_prod1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>
  		
  		
  		<?php
      include "conexion.php";
      $sentencia="SELECT * FROM productos";
      $resultado = $conexion->query($sentencia) or die (mysqli_error($conexion));
      while($filas=$resultado->fetch_assoc())
      {
        echo "<tr>";
          echo "<td>"; echo $filas['no']; echo "</td>";
          echo "<td>"; echo $filas['cantidad']; echo "</td>";
          echo "<td>"; echo $filas['nombre']; echo "</td>";
          echo "<td>"; echo $filas['modelo']; echo "</td>";
          echo "<td>  <a href='modif_prod1.php?no=".$filas['no']."'> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>";
          echo "<td> <a href='eliminar_prod.php?no=".$filas['no']."''><button type='button' class='btn btn-danger'>Eliminar</button></a> </td>";
        echo "</tr>";
      }

      ?>
  	</table>
  </div>
  
	

</div>


</body>
</html>