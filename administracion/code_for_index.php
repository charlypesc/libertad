<!DOCTYPE html>
<html>
<head>
	<title></title>

<style type="text/css">
	
img{
	width:25%;
}

</style>

</head>
<body>

<?php
	include ("conexion.php");
	include "config.php";
		
			
		$registros=$base->query("SELECT * FROM carrusel ORDER BY id desc")->fetchAll(PDO::FETCH_OBJ);



?>
<h1>Aca van las noticias</h1><br>
<?php
		foreach ($registros as $not):?>
		<tr>
			
			<td class="blank"><a href="not.php?id=<?php echo $not->id;?>"><?php echo $not->fecha?></a></td>
			<div><img src="<?php echo $ruta_archivos.$not->img_carrusel?>"></div>
			<td class="blank"><?php echo $not->encabezado_carrusel?></td><br>
			<td class="blank"><?php echo $not->resena_carrusel?></td><br><br><br><br>
		</tr>
<?php
		endforeach;		
?>		



</body>
</html>