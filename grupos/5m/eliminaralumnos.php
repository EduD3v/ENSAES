<?php

include("config.php");

    $control= $_REQUEST['id'];

    $query="DELETE FROM a_5m WHERE control='$control'";
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location:alumnos.php");
	}
	else{
		echo "Inserción no-exitosa";
	}

?>