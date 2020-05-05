<html>
		<head>
			<h1>Hola!!</h1>
		</head>
		
		<div class="__id">
			<?php
			$id = $_GET['idRegistro'];
			$consulta = "SELECT * FROM nb_test where idRegistro = $id";

			?>
		</div>
		<div>
			<?php
							include ("cn.php");
							//filtra por id donde $id es el valor que se obtiene del GET				
							$noticias = "SELECT * FROM noticias where id=$id";
							$nota = mysqli_query($conexion, $noticias);
							$fila = mysqli_fetch_row($nota);
							
							echo $fila[0];
							echo $fila[1];
							echo $fila[2];
							echo $fila[3];
                            ?>
                            
                            
                            
		</div>
</html>