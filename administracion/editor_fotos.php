<!DOCTYPE html>
<html>
<head>
	<title>Editor de Fotos</title>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
</head>
<body>

	<div class="wrap">
	<?php include "_header_index.php"; 

	$id=$_GET['id'];



	?>

	</div>
	<div>
		<form method="POST" action="datosImagen.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
			<table>
				<tr><td>Imagen Carrusel</td><td><input type="file" name="icarr[]"></td></tr>
				<tr><td>Imagen 1</td><td><input type="file" name="icarr[]"></td></tr>
				<tr><td>Imagen 2</td><td><input type="file" name="icarr[]"></td></tr>
				<tr><td>Imagen 3</td><td><input type="file" name="icarr[]"></td></tr>	
				<tr><td>Imagen 4</td><td><input type="file" name="icarr[]"></td></tr>
				<tr><td>Imagen 5</td><td><input type="file" name="icarr[]"></td></tr>
				<tr><td>Imagen 6</td><td><input type="file" name="icarr[]"></td></tr>
				<tr><td>Imagen 7</td><td><input type="file" name="icarr[]"></td></tr>
				<tr><td colspan="2"><input type="submit" name="enviar" value="Upload"></td></tr>
			</table>
		</form>


	</div>

</body>
</html>