<?php

include("config.php");

    $id= $_REQUEST['id'];
    $nombre= $_POST['nombre'];
	$usuario= $_POST['usuario'];
	$contrasena= $_POST['contrasena'];
	$pass=md5($contrasena);

    $query="UPDATE administradores SET nombre='$nombre', usuario='$usuario', contrasena='$pass' WHERE id='$id'";
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location:administradores.php");
	}
	else{
		echo "Inserción no-exitosa";
	}

?>