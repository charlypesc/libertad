<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			width: 100%;
		}
		div{
			width: 30%;
			margin: auto;
			
		}		
		td {
			width: 60px;
			border: 1px solid orange;
		}
		table{
			margin: auto;	
		}
		.inp {
			
			text-align: center;
		}
		.inp, input {
			width: 150px;
		}


	</style>
</head>
<body>
<div>




	
		<table>

			<tr>
				<h1>Actualizar registros</h1>
			</tr>
			<h3>Acá puedes actualizar los registros desde la base de datos.</h3>

<?php
	


	include("conexion.php");

	if(!isset($_POST["actualizar"])){

	$id=$_GET["id"];
	$nom=$_GET["nom"];
	$ape=$_GET["ape"];
	$cur=$_GET["cur"]; 


	}else{

		$id=$_POST["id"];
		$nom=$_POST["nom"];
		$ape=$_POST["ape"];
		$cur=$_POST["cur"]; 

		$sql="UPDATE alumnos SET Nombre=:miNom, Apellido=:miApe, Curso=:miCur WHERE id=:miId";
		
		$resultado=$base->prepare($sql);

		$resultado->execute(array(":miId"=>$id, ":miNom"=>$nom, ":miApe"=>$ape,":miCur"=>$cur ));

		header("location:index.php");


	}

?>
	<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<tr>
				<td>ID</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Curso</td>
			</tr>
				<tr>
				<td><label for="id"></label><input type="h" size="15" name="id" id="id" value="<?php echo $id ?>"></td>
				<td><label for="nom"></label><input type="text" size="15" name="nom" id="nom" value="<?php echo $nom ?>"></td>
				<td><input type="text" size="15" name="ape" id="ape" value="<?php echo $ape ?>"></td>
				<td><input type="text" size="15" name="cur" id="cur" value="<?php echo $cur ?>"></td>
			</tr>
			<tr><td colspan="4" class="inp"><input type="submit" id="actualizar" value="Actualizar" name="actualizar" ></td></tr>	






		</table>




	</form>
</div>

</body>
</html>