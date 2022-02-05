 <!DOCTYPE html>
<html lang="en">
<head>
	<title>ENSAES|Iniciar Sesión</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="estilos.css">

</head>

<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					INICIO DE SESIÓN
				</span>
				<center>
			<form action="proceso.php" method="POST">
            <label>Usuario: </label>
            <input type="text" name="usuario" value="" placeholder="Usuario..." autocomplete="off" required ><br>
            <label>Contraseña: </label>
            <input type="password" name="contrasena" value="" placeholder="Contrasena..." autocomplete="off" required><br><br>
            <input type="submit" name="signin" value="Iniciar Sesión"/>
         </form>
		 </center>
			</div>
		</div>
	</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

</body>
</html>
