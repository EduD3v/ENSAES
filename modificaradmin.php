
<html>
<head>
      <title>Modificar Administradores</title>
</head>
<body>
      <center>
	  
	   <?php
		
		$id=$_REQUEST['id'];
		
		    include ("config.php");
			
			$query="SELECT * FROM administradores WHERE id='$id'";
			$resultado= $conexion->query($query);
			$row=$resultado->fetch_assoc();
			?>
	  
	  <form action="modificaradminproceso.php?id=<?php echo $row['id']; ?>" method="POST"><br/><br/><br/>
	  
	   
	  
	  <br/>
	      <input type="text" name="nombre" placeholder="Nombre Completo" value="<?php echo $row['nombre']; ?>" required><br/><br/>
		  <input type="text" name="usuario" placeholder="Usuario..." value="<?php echo $row['usuario']; ?>" required><br/><br/>
		  <input type="password" name="contrasena" placeholder="Contrasena..." value="<?php echo $row['contrasena']; ?>" required><br/><br/>
          <input type="submit" value="Aceptar" />		  
	  </form>
	 </center>
	 <li><a href="index.php">Regresar</a></li>
	 <li><a href="administradores.php">¿Quiénes son Administradores?</a></li>
</body>
</html>