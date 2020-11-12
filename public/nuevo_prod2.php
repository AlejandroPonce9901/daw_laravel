<?php

	
	NuevoProducto($_POST['cantidad'], $_POST['producto'], $_POST['modelo']);
	
	function NuevoProducto($id_prod, $nom, $descrip)
	{
		include 'conexion.php';
		$sentencia= "INSERT INTO productos (cantidad, nombre, modelo) VALUES ('".$id_prod."', '".$nom."', '".$descrip."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Producto Ingresado Exitosamante!!");
	window.location.href='menu.php';
</script>