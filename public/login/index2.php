<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Proyecto Lumina</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
    	<!--
    		#tablita{
    			float: right;
    		}

    	-->
    </style>

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" background="images/.jpg" style="background-attachment: fixed">
<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->
<?php

include("include/menu.php");

?>

<!-- ======================================================================================================================== -->
<div><h3>INFORMACION DE USUARIO</h3>
<div class="row" style="text-align:center">
			<div class="span2">
				<div class=>
					<table width="155%" border="8" cellpadding="0" cellspacing="0" bordercolor="#000000">
						<tr>
							<th>Nombre</th>
							<th>Area</th>
							<th>Puesto</th>
							<th>Status</th>
							<th>Fecha de ingreso</th>
						</tr>
	<tr>
<?php


	echo "<td>".$_SESSION['user']."</td>";
	echo "<td>".$_SESSION['area']."</td>";
	echo "<td>".$_SESSION['puesto']."</td><br>";
	echo "<td>".$_SESSION['status']."</td><br>";
	echo "<td>".$_SESSION['fecha']."</td><br>";
    

?>
</tr>
</table>

				</div>


</div>
<div id='tablita'>
</div>

</div>
</div>

</div>

<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

    
	</style>
  </body>
</html>