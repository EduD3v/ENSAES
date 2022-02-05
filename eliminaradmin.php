<?php

include("config.php");

    $id= $_REQUEST['id'];

    $query="DELETE FROM administradores WHERE id='$id'";
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location:administradores.php");
	}
	else{
		echo "Inserción no-exitosa";
	}

?>