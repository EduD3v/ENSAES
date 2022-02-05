
<html>
<head>
      <title>Modificar Alumnos</title>
</head>
<body>
      <center>
	  
	   <?php
		
		$control=$_REQUEST['id'];
		
		    include ("config.php");
			
			$query="SELECT * FROM a_5m WHERE control='$control'";
			$resultado= $conexion->query($query);
			$row=$resultado->fetch_assoc();
			?>
	  
	  <form action="modificaralumnosproceso.php?id=<?php echo $row['control']; ?>" method="POST"><br/><br/><br/>
	  
	   
	  
	  <br/>
	      <input type="text" name="control" placeholder="Número de Control" value="<?php echo $row['control']; ?>" required><br/><br/>
		  <input type="text" name="nombre" placeholder="Nombre del Alumno(a)" value="<?php echo $row['nombre']; ?>" required><br/><br/>
		  <input type="text" name="apellidop" placeholder="Apellido Paterno del Alumno(a)" value="<?php echo $row['apellidop']; ?>" required><br/><br/>
		  <input type="text" name="apellidom" placeholder="Apellido Materno del Alumno(a)" value="<?php echo $row['apellidom']; ?>" required><br/><br/>
		  <input type="text" name="calle" placeholder="Calle" value="<?php echo $row['calle']; ?>" required><br/><br/>
		  <input type="text" name="callenum" placeholder="Número de Vivienda" value="<?php echo $row['callenum']; ?>" required><br/><br/>
		  <input type="text" name="colonia" placeholder="Colonia" value="<?php echo $row['colonia']; ?>" required><br/><br/>
		  <input type="text" name="codigopostal" placeholder="Código Postal" value="<?php echo $row['codigopostal']; ?>" required><br/><br/>
		  <input type="text" name="municipio" placeholder="Municipio de Residencia" value="<?php echo $row['municipio']; ?>" required><br/><br/>
		  <input type="text" name="telefonocasa" placeholder="Teléfono de Casa" value="<?php echo $row['telefonocasa']; ?>" required><br/><br/>
		  <input type="text" name="telefonomovil" placeholder="Teléfono Celular" value="<?php echo $row['telefonomovil']; ?>" required><br/><br/>
		  <input type="text" name="telefononotificacion" placeholder="Teléfono para Notificaciones" value="<?php echo $row['telefononotificacion']; ?>" required><br/><br/>
		  <input type="text" name="email" placeholder="Correo Electrónico" value="<?php echo $row['email']; ?>" required><br/><br/>
		  <input type="text" name="huella" placeholder="Huella Dáctilar" value="<?php echo $row['huella']; ?>" required><br/><br/>
		  <input type="password" name="niprecuperacion" placeholder="NIP de Recuperación" value="<?php echo $row['password']; ?>" required><br/><br/>
          <input type="submit" value="Aceptar" />			  
	  </form>
	 </center>
	 <li><a href="index.php">Regresar</a></li>
	 <li><a href="alumnos.php">Lista de Alumnos</a></li>
</body>
</html>