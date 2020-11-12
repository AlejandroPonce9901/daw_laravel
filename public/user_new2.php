<?php
	NuevoUsuario($_POST['nom'], $_POST['usr'], $_POST['pass'], $_POST['tipo']);

	function NuevoUsuario($nombre, $usuario, $password, $tipo_usr )
	{
		include 'conexion.php';
		$sentencia="INSERT INTO usuarios (nombre, usuario, password, tipo_usuario, status) VALUES ('".$nombre."', '".$usuario."', '".$password."', '".$tipo_usr."', 'ACTIVO' )";
		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));



		echo '<script>';
			echo 'alert("Usuario creado exitosamente!!");';
			echo 'window.location.href="users.php";';
		echo '</script>';

	}
?>

