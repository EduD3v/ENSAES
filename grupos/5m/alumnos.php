<?php
 



?>

<html>
<head>
     <title>Lista 5°"M"</title>
<head>
<body background="/ensaes/images/fondos/4.png">
    <table>
     <center>
          <table border="3">
		  <thead>
		     <th colspan="1"><a href="registroalumnos.php">Nuevo Registro</a></th>
			 <th colspan="17"> Lista de Alumnos Correspondiente a 5° "M"</th>
		  </thead>
		  <tbody>
		  <tr>
		  <td>No. Control</td>
		  <td>Nombre</td>
		  <td>Apellido Paterno</td>
		    <td>Apellido Materno</td>
			  <td>Calle</td>
			    <td>No.</td>
				  <td>Colonia</td>
				    <td>Código Postal</td>
					  <td>Municipio</td>
					    <td>Teléfono Casa</td>
						  <td>Teléfono Móvil</td>
						    <td>Teléfono Notificación</td>
							  <td>Email</td>
							    <td>Huella</td>
								  <td>NIP</td>
		  <td colspan="2">Funciones</td>
		  </tr>
		  <?php
		    include ("config.php");
			
			$query="SELECT * FROM a_5m";
			$resultado= $conexion->query($query);
			while($row=$resultado->fetch_assoc()){
			?>
			    <tr>
				<td><?php echo $row['control']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['apellidop']; ?></td>
				<td><?php echo $row['apellidom']; ?></td>
				<td><?php echo $row['calle']; ?></td>
				<td><?php echo $row['callenum']; ?></td>
				<td><?php echo $row['colonia']; ?></td>
				<td><?php echo $row['codigopostal']; ?></td>
				<td><?php echo $row['municipio']; ?></td>
				<td><?php echo $row['telefonocasa']; ?></td>
				<td><?php echo $row['telefonomovil']; ?></td>
				<td><?php echo $row['telefononotificacion']; ?></td>
				<td><?php echo $row['email']; ?></td>
				<td><?php echo $row['huella']; ?></td>
				<td><?php echo $row['niprecuperacion']; ?></td>
				<td><a href="modificaralumnos.php?id=<?php echo $row['control']; ?>">Modificar</a></td>
				<td><a href="eliminaralumnos.php?id=<?php echo $row ['control']; ?>">Eliminar</a></td>
				</tr>
			
			
		   <?php
			
			}
		  ?>
		  </tbody>
		  </table>
     </center>
	 <button>
	 <a href="http://localhost/ensaes/grupos/5m/registroalumnos.php">Regresar</a>
	 </button>
</body>
</html>