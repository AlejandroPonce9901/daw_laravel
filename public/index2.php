<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title></title>
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

        <li><a href=""><span ></span> Iniciar Sesión: </a></li>
        <li><a href="login2.php"><span class="glyphicon glyphicon-log-in"></span> Usuario </a></li>
        <li><a href="index2.php"><span class="glyphicon glyphicon-log-in"></span> Administrador </a></li>
      </ul>

    </div>
  </div>
</nav>






<div class="todo">
  
  
  
  <div id="contenido">

    <div id="login" style="width: 200px; margin: auto;">
      <form class="form-signin" method="POST" action="login.php">
        <h2 class="form-signin-heading">Iniciar sesión</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputUsuario" name="inputUsuario" class="form-control" placeholder="Nombre de usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">

        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
      </form>
    </div>
    
  
	

</div>


</body>
</html>