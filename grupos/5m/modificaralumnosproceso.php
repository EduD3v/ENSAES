<?php

include("config.php");

    $control= $_REQUEST['control'];
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
	
    $query="UPDATE a_5m SET nombre='$nombre', apellidop='$apellidop', apellidom='$apellidom', calle='$calle', callenum='$callenum', colonia='$colonia', codigopostal='$codigopostal', municipio='$municipio', telefonocasa='$telefonocasa', telefonomovil='$telefonomovil', telefononotificacion='$telefononotificacion', email='$email', huella='$huella', niprecuperacion='$niprecuperacion' WHERE control='$control'";
	$resultado= $conexion->query($query);
	
	if($resultado){
		header("Location:alumnos.php");
	}
	else{
		echo "Inserción no-exitosa";
	}

?>