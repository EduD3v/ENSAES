<?php

include("config.php");

    $nombre= $_POST['nombre'];
	$usuario= $_POST['usuario'];
	$contrasena= $_POST['contrasena'];
	$pass=md5($contrasena);

    $query="INSERT INTO administradores(nombre,usuario,contrasena) VALUES ('$nombre','$usuario','$pass')";
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location:administradores.php");
	}
	else{
		echo "Inserción no-exitosa";
	}

?>