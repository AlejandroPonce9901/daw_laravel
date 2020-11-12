<?php
  //include 'conexion.php';

  $consulta=ConsultarUsuario($_GET['usr']);

  function ConsultarUsuario($id)
  {
    include 'conexion.php'; //Se necesita el include dentro de la funcion para que no de error al intentar conectar con la base de datos
    $query="SELECT * FROM usuarios WHERE id_usuario='".$id."' ";
    $resultado= $conexion->query($query) or die ("Error al consultar usuario: ".mysqli_error($conexion) );

    $filas=$resultado->fetch_assoc();

    return [
      $filas['id_usuario'],
      $filas['nombre'],
      $filas['usuario'],
      $filas['password'],
      $filas['tipo_usuario'],
      $filas['status']
    ];

  }

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Modificar Usuario</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css2/bootstrap.css" rel="stylesheet" type="text/css">

<link href="bootstrap-fileinput-master/css/fileinput.css" rel="stylesheet" type="text/css">
<link href="bootstrap-fileinput-master/css/fileinput.min.css" rel="stylesheet" type="text/css">
<script src="bootstrap-fileinput-master/js/fileinput.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

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
                        <span style="color: #e04000; font-family: rochesterregular, serif; font-size: 55px; line-height: 50px;">Modificar Usuario</span>
                    </h1>
                    
                </div>

<div class="todo">
  
  
  
  <div id="contenido">
    <?php include'navbar.php'; ?>
    <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
      <span> <h1>Editar</h1> </span>
      <br>
    <form action="user_edit2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">


          <div>
            <div class="row">
              <div class="col-xs-3">
              <label>IDusuario:</label>
              <input type="text" name="id_user" id="id_user" class="form-control" readonly="readonly" value="<?php echo $consulta[0]; ?>">
              </div>
          </div>

          <div>
            <div class="row">
              <div class="col-xs-3">
              <label>Nombre:</label>
              <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $consulta[1]?>">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Usuario:</label>
              <input type="text" name="usr" id="usr" class="form-control" value="<?php echo $consulta[2]?>">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Password:</label>
              <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $consulta[3]?>">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Tipo de Usuario:</label>
              <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $consulta[4]?>">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-3">
              <label>Status:</label>
              <select name="estatus" id="estatus" class="form-control">
                <option> <?php echo $consulta[5]; ?>  </option>
                <option>ACTIVO</option>
                <option>INACTIVO</option>
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

<script>
$("#file-1").fileinput({
showCaption: false,
browseClass: "btn btn-primary btn-lg",
fileType: "any"
});
</script>
