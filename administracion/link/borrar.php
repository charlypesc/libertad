<?php
	
	include("conexion.php");

	$id=$_GET["id"];

	$base->query("DELETE FROM alumnos WHERE ID='$id'");

	header("location:index.php");



?>