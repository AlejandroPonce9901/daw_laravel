<?php
	
	EliminarUsuario($_GET['usr']);

	function EliminarUsuario($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM usuarios WHERE id_usuario='".$id."' ";
		$conexion->query($sentencia) or die ("Error al Eliminar usuario: ".mysqli_error());
	}

	echo '<script>';
		echo 'alert("Usuario Eliminado!!");';
		echo 'window.location.href="users.php";';
	echo '</script>';
?>