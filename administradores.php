<?php
 



?>

<html>
<head>
     <title>Tabla de Administradores</title>
<head>
<body background="/ensaes/images/fondos/2.png">
     <center>
          <table border="3">
		  <thead>
		     <th colspan="1"><a href="registroadministrador.php">Nuevo Registro</a></th>
			 <th colspan="4"> Lista de Administradores</th>
		  </thead>
		  <tbody>
		  <tr>
		  <td>Id</td>
		  <td>Nombre</td>
		  <td>Usuario</td>
		  <td colspan="2">Funciones</td>
		  </tr>
		  <?php
		    include ("config.php");
			
			$query="SELECT * FROM administradores";
			$resultado= $conexion->query($query);
			while($row=$resultado->fetch_assoc()){
			?>
			    <tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['nombre']; ?></td>
				<td><?php echo $row['usuario']; ?></td>
				<td><a href="modificaradmin.php?id=<?php echo $row['id']; ?>">Modificar</a></td>
				<td><a href="eliminaradmin.php?id=<?php echo $row ['id']; ?>">Eliminar</a></td>
				</tr>
			
			
		   <?php
			
			}
		  ?>
		  </tbody>
		  </table>
     </center>
	 <button>
	 <li><a href="http://localhost/ensaes/registroadministrador.php">REGRESAR</a></li>
	 </button>
	 <button>
	 <li><a href="http://localhost/ensaes/PaginaPrincipal/index.php">REGRESAR A LA PAGINA PRINCIPAL</a></li>
	 </button>
</body>
</html>