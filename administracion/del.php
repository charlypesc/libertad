<?php
	
	include("conexion.php");

	$id=$_GET["id"];

	$base->query("DELETE FROM carrusel WHERE ID='$id'");

	//$base->execute();

	header("location:noticias.php");

?>