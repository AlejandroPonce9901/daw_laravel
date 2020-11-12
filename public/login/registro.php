<?php

	$nombre=$_POST['nombre'];
	$user=$_POST['user'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$stat=$_POST['stat'];
	$ar=$_POST['ar'];
	$pues=$_POST['pues'];
	$fech=$_POST['fech'];
	$dato=$_POST['dato'];
	$iddato=$_POST['iddato'];
 
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM login WHERE user='$user'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el usuario");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$sql="INSERT INTO login VALUES('$dato','$nombre','$pass','$user','','$stat','$ar','$pues','$fech','$iddato')";

				echo $sql;
				mysqli_query($mysqli,$sql);
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}

			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

		 

	
?>

