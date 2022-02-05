<?php

include("config.php");

    $control= $_POST['control'];
	$nombre= $_POST['nombre'];
	$apellidop= $_POST['apellidop'];
	$apellidom= $_POST['apellidom'];
	$calle= $_POST['calle'];
	$callenum= $_POST['callenum'];
	$colonia= $_POST['colonia'];
	$codigopostal= $_POST['codigopostal'];
	$municipio= $_POST['municipio'];
	$telefonocasa= $_POST['telefonocasa'];
	$telefonomovil= $_POST['telefonomovil'];
	$telefononotificacion= $_POST['telefononotificacion'];
	$email= $_POST['email'];
	$huella= $_POST['huella'];
	$niprecuperacion= $_POST['niprecuperacion'];

    $query="INSERT INTO a_5m(control,nombre,apellidop,apellidom,calle,callenum,colonia,codigopostal,municipio,telefonocasa,telefonomovil,telefononotificacion,email,huella,niprecuperacion) VALUES ('$control','$nombre','$apellidop','$apellidom','$calle','$callenum','$colonia','$codigopostal','$municipio','$telefonocasa','$telefonomovil','$telefononotificacion','$email','$huella','$niprecuperacion')";
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location:alumnos.php");
	}
	else{
		echo "  Ops... Tuvimos un problema";
	}

?>