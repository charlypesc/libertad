<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
	<title></title>
</head>
<body>	
	<div class="wrap">
		<?php
		session_start();

										if(!isset($_SESSION["usuario"])){
											header("location:login.php");
										}	
			
		include "_header_index.php";

		?>
	</div>
	
	<div class="cab_big_size">
		<h3>Chequeo de noticias desde Index --> solo para desarrollo </h3>

		<h2><a href="code_for_index.php">Ir a formulario</a></h2>

	</div>


	<div class="cab_big_size">
		<h1>Inserta</h1>
		<h2><a href="insert.php">Ingresa una nueva noticia</a></h2>
	</div>
	
	<div class="cab_big_size"><h1>Actualiza</h1></div>

	


<?php
	include ("conexion.php");
		
			
		$registros=$base->query("SELECT * FROM carrusel ORDER BY id desc")->fetchAll(PDO::FETCH_OBJ);



?>




		
<form action=<?php echo $_SERVER['PHP_SELF'];?> method="get">
	<table class="tabla_noticia" border="0" align="center">
		<tr>
			<td class="primera_fila">ID</td>
			<td class="primera_fila">Fecha</td>
			<td class="primera_fila">Encabezado</td>
			<td class="primera_fila">Reseña</td>
		</tr>

<?php
		foreach ($registros as $not):?>
		<tr>
			<td class="blank"><?php echo $not->id?></td>
			<td class="blank"><?php echo $not->fecha?></td>
			<td class="blank"><?php echo $not->encabezado_carrusel?></td>
			<td class="blank"><?php echo $not->resena_carrusel?></td>

			<td class="bot"><a href="del.php?id=<?php echo $not->id?>"><input type="button" name="del" value="Borrar"></a></td>
			<td class="bot"><a href="form_noticias.php?id=<?php echo $not->id?>"><input type="button" name="up" value="Actualizar"></a></td>
		</tr>
<?php
		endforeach;		
?>		

	</table>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</form>
</body>
</html>