<!DOCTYPE html>
<html>
<head>
	<title>Sección Administración</title>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
</head>
<body>
	<div class="wrap">



										<?php

										session_start();

										if(!isset($_SESSION["usuario"])){
											header("location:login.php");
										}	

											//header corresponde a la seccion de administracion (ini.css)
											include "_header_index.php";
										?>
	</div>
		<div><h3><a href="cierre.php">Cerrar Sesión</a></h3></div>
		<section class="admin">
				<h1>Bienvenido al Panel de Administración (en desarrollo)</h1>
				<h2>¿Que cambios puedes realizar desde este panel?</h2>
				<li>Manipular las noticias que se han ingresado a la base de datos</li>
				<li>Un usuario autorizado podrá cambiar los datos de aviso de ultima hora.</li>
		</section>


</body>
</html>