<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<?php

	include "conexion.php";

	$sql="SELECT * FROM login WHERE usuario= :LOGIN AND pass=:PASSWORD";		
	$resultado=$base->prepare($sql);

	$login=htmlentities(addslashes($_POST["login"]));
	$pass=htmlentities(addslashes($_POST["pass"]));

	$resultado->bindValue(":LOGIN",$login);
	$resultado->bindValue(":PASSWORD", $pass);

	$resultado->execute();

	$numero_registro=$resultado->rowCount();

	if($numero_registro!=0){


		session_start();
		$_SESSION["usuario"]=$_POST["login"];
		header("location:index.php");

	}else{


		header("location:login.php");

	}




	?>

</body>
</html>