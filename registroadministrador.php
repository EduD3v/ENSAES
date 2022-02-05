<?php


include("config.php");


?>

<html>
<head>
      <title>Registro de Administradores</title>
</head>
<body background="/ensaes/images/fondos/7.png">
<font color="white"><h1 align="center">REGISTRO DE ADMINISTRADORES</h1></font>
      <center>
	  <form action="admin_guardar.php" method="POST"><br/><br/><br/>
	      <input type="text" name="nombre" placeholder="Nombre Completo" value="" required><br/><br/>
		  <input type="text" name="usuario" placeholder="Usuario..." value="" required><br/><br/>
		  <input type="password" name="contrasena" placeholder="Contrasena..." value="" required><br/><br/>
          <input type="submit" value="Aceptar" />		  
	  </form>
	 </center>
	 <button>
	 <li><a href="http://localhost/ensaes/PaginaPrincipal/index.php">Regresar</a></li>
	 </button>
	 <button>
	 <li><a href="administradores.php">¿Quiénes son Administradores?</a></li>
	 </button>
</body>
</html>