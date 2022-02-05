<?php

session_start();

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$pass=md5($contrasena);

include("config.php");

$proceso = $conexion->query("SELECT * FROM administradores WHERE usuario='$usuario' AND contrasena='$pass' ");

     if($resultado = mysqli_fetch_array($proceso)){
	    $_SESSION['u_usuario'] = $usuario;
        header("Location: PaginaPrincipal/index.php");		
	 }
	 else{
		 header("Location: index.php");
	 }
?>