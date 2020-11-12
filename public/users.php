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
<title>Ejemplo de interaccion con DB</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css2/bootstrap.css" rel="stylesheet" type="text/css">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
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
                        <span style="color: #e04000; font-family: rochesterregular, serif; font-size: 55px; line-height: 50px;">Usuarios</span>
                    </h1>
                    
                </div>


<div class="todo">
  
  
  
  <div id="contenido">
    <?php include'navbar.php'; ?>

  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
  			<th>Nombre</th>
  			<th>Usuario</th>
  			<th>Status</th>
  			<th></th>
  			<th> <a href="user_new1.php"> <button type="button" class="btn btn-info">Nuevo</button> </a> </th>
  		</thead>

      <?php
        $query="SELECT * FROM usuarios";
        $resultado = $conexion->query($query) or die ("Error al consultar usuarios: ".mysqli_error($conexion));
        while ($filas=$resultado->fetch_assoc())
        {

      ?>
			  <tr>
			  	 <td> <?php echo $filas['nombre']?>  </td>
			     <td> <?php echo $filas['usuario']?> </td>
			     <td> <?php echo $filas['status']?> </td>
			     <td>  <a href='user_edit1.php?usr=<?php echo $filas['id_usuario'] ?> '> <button type='button' class='btn btn-success'>Modificar</button> </a> </td>
			     <td> <a href='user_delete.php?usr= <?php echo $filas['id_usuario'] ?> '> <button type='button' class='btn btn-danger'>Eliminar</button></a> </td>
			  </tr>
      <?php
        }
      ?>

  	</table>
  </div>
  
	

</div>


</body>
</html>
