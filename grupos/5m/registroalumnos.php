<?php


include("config.php");


?>

<html>
<head>
      <title>ENSAES|Registro de Alumnos</title>
</head>
<body background="/ensaes/images/fondos/6.png">
<font color="white"><h1 align="center">REGISTRO DE ALUMNOS</h1></font>
      <center>
	  <form action="alumnos_guardar.php" method="POST"><br/><br/><br/>
	      <input type="text" name="control" placeholder="Número de Control" value="" required><br/><br/>
		  <input type="text" name="nombre" placeholder="Nombre del Alumno(a)" value="" required><br/><br/>
		  <input type="text" name="apellidop" placeholder="Apellido Paterno del Alumno(a)" value="" required><br/><br/>
		  <input type="text" name="apellidom" placeholder="Apellido Materno del Alumno(a)" value="" required><br/><br/>
		  <input type="text" name="calle" placeholder="Calle" value="" required><br/><br/>
		  <input type="text" name="callenum" placeholder="Número de Vivienda" value="" required><br/><br/>
		  <input type="text" name="colonia" placeholder="Colonia" value="" required><br/><br/>
		  <input type="text" name="codigopostal" placeholder="Código Postal" value="" required><br/><br/>
		  <input type="text" name="municipio" placeholder="Municipio de Residencia" value="" required><br/><br/>
		  <input type="text" name="telefonocasa" placeholder="Teléfono de Casa" value="" required><br/><br/>
		  <input type="text" name="telefonomovil" placeholder="Teléfono Celular" value="" required><br/><br/>
		  <input type="text" name="telefononotificacion" placeholder="Teléfono para Notificaciones" value="" required><br/><br/>
		  <input type="text" name="email" placeholder="Correo Electrónico" value="" required><br/><br/>
		  <input type="text" name="huella" placeholder="Huella Dáctilar" value="" required><br/><br/>
		  <input type="password" name="niprecuperacion" placeholder="NIP de Recuperación" value="" required><br/><br/>
          <input type="submit" value="Aceptar" />		  
	  </form>
	 </center>
	 <button>
	 <li><a href="/ensaes/PaginaPrincipal/index.php">Regresar</a></li>
	 </button>
	 <button>
	 <li><a href="alumnos.php">Registro de Alumnos</a></li>
	 </button>
</body>
</html>