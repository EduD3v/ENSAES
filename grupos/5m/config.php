<?php 
 $conexion = new mysqli("localhost","root","","ensaes");
 
 if($conexion){
	 echo "Conexion exitosa";
 }
 else{
	 echo "conexion no exitosa";
 }
?>