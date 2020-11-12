<?php

	ModificarUsuario($_POST['id_user'], $_POST['nom'], $_POST['usr'], $_POST['pass'], $_POST['tipo'], $_POST['estatus']);

	function ModificarUsuario($id_usuario, $nom, $usuario, $password, $tipo_usuario, $status)
	{
		include 'conexion.php';

		$sentecia="UPDATE usuarios SET nombre='".$nom."', usuario='".$usuario."', password='".$password."', tipo_usuario='".$tipo_usuario."', status='".$status."' WHERE id_usuario='".$id_usuario."' ";

		$conexion->query($sentecia) or die ("Error al actualizar datos de usuario: ".mysqli_error($conexion));

	}

	echo '<script>';
		echo 'alert("Datos actualizados con exito!!");';
		echo 'window.location.href="users.php";';
	echo '</script>';
?>