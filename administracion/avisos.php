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
				include "config.php";
				include "conexion.php";
				$id="1";	
				if(!isset($_POST["Publicar"])){

					$sql="SELECT * FROM aviso WHERE id= $id";
					$resultado=$base->prepare($sql);
					$resultado->execute();

					while($registrado=$resultado->fetch(PDO::FETCH_ASSOC)){

						$aviso=$registrado['publicando_aviso'];
						$aviso=rawurldecode(str_replace("%0D%0A","<br>",$aviso));


					}


					}else{

						$id='1';
						$aviso=$_POST["aviso"];

						$sql="UPDATE aviso SET id=:Id, publicando_aviso=:publicandoAviso WHERE id=:Id";
						$resultado=$base->prepare($sql);
						$resultado->execute(array(":Id"=>$id, ":publicandoAviso"=>$aviso));
					}	



					

				?>
	</div>
	<div class="generico">
		<section>
		
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<br>
			<h1>Ingresa tu aviso</h1><br><br>
			<h3>El aviso que aquí se publique se publicará en la pagina principal de www.elibertad.cl</h3>

			<textarea name="aviso" rows="20" cols="100"><?php echo $aviso; ?></textarea><br>
			<input type="submit" name="Publicar" value="Publicar">	

		</form>

	</section>	
		
	</div>			
</body>
</html>