<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php


		include ("conexion.php");
		$sql="SELECT id, fecha FROM carrusel";

			$resultado=$base->prepare($sql);

			$resultado->execute();

	while($registros=$resultado->fetch(PDO::FETCH_ASSOC)){

		$im=$registros['fecha'];

	}
	?>

	<div><?php echo $im ?></div>
</body>
</html>