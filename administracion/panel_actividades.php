<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
	<title>Panel de Actividades</title>
</head>
<body>

	<div class="wrap">
		<?php
				session_start();

										if(!isset($_SESSION["usuario"])){
											header("location:login.php");
										}	
		
				include "_header_index.php";
				include "config.php";
				include "conexion.php";
				$id="1";	
				if(!isset($_POST["Publicar"])){

					$sql="SELECT * FROM panelflip WHERE id= $id";
					$resultado=$base->prepare($sql);
					$resultado->execute();

					while($registrado=$resultado->fetch(PDO::FETCH_ASSOC)){

						
						$flip=$registrado['flip'];	
						$panel=$registrado['panel'];
						$panel=rawurldecode(str_replace("%0D%0A","<br>",$panel));
						

					}


					}else{

						$id='1';
						$flip=$_POST["flip"];
						$panel=$_POST["panel"];
						$panel=rawurlencode(str_replace("%0D%0A","<br>",$panel));



						$sql="UPDATE panelflip SET id=:Id, flip=:Flip, panel=:Panel WHERE id=:Id";
						$resultado=$base->prepare($sql);
						$resultado->execute(array(":Id"=>$id,":Flip"=>$flip, ":Panel"=>$panel));

						

					}	


				?>

	</div>
	<div class="generico">
		
	<section>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<br>

				<h1>Panel Auxiliar o Panel de actividades</h1>
				<p>Este panel permitirá ingresar mayor informacion relacionada a las actividades a desarrollarse en la semana</p>
				
				<h3>Titulillo de Panel de Actividades</h3>
				<p>Ambos campos deben encontrarse vacios, para que no sean publicados</p>
				<input type="text" size="100" name="flip" value="<?php echo $flip;?>">
				<h3>Titulillo de Panel de Actividades</h3>
				<p>Ambos campos deben encontrarse vacios, para que no sean publicados</p>
				<textarea cols="100" rows="10" name="panel"><?php echo $panel; ?></textarea><br>

				<input type="submit" class="publicar" value="Publicar"name="Publicar">

		</form>

	</section>
	



	</div>

</body>
</html>