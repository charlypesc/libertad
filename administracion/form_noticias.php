<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
	<title>Actualizador de noticias</title>
	
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

		<div id="wrap_form_not">	
				
				<div class="cab_big_size">
				<h1>Edición de noticias</h1>	

				</div>
				

				<div class="form_not_cabecera">	

								
						<h2>A continuación edita la noticia y pulsa actualizar, los cambios se verán inmediatamente reflejados en la página web del colegio</h2><br>
				</div>
	<?php

		include "conexion.php";
		include "config.php";
		if(!isset($_POST["actualizar"])){

			$id=$_GET['id'];

			$sql="SELECT * FROM carrusel WHERE id=$id";

			$resultado=$base->prepare($sql);

			$resultado->execute();
			
			
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

				$id=$registro['id'];
				
				$fecha=$registro['fecha'];

				$ecarrusel=$registro['encabezado_carrusel'];

				$icarrusel=$registro['img_carrusel'];

				$rcarrusel=$registro['resena_carrusel'];

				$img1=$registro['img1'];

				$img2=$registro['img2'];

				$img3=$registro['img3'];

				$img4=$registro['img4'];

				$img5=$registro['img5'];

				$img6=$registro['img6'];

				$img7=$registro['img7'];

				$enoticia=$registro['encabezado_noticia'];

				$cnoticia=$registro['cuerpo_noticia'];

				$cnoticia=rawurldecode(str_replace("%0D%0A","<br>",$cnoticia));

				$cflickr=$registro['code_flickr'];

				$cface=$registro['code_face'];

				$ccomentarios=$registro['code_comentarios'];

				
			}			

			
			
		}else{

			$id=$_POST["id"];

			$fecha=$_POST["fec"];

			$ecarrusel=$_POST["ecarr"];

			$icarrusel=$_POST['icarr'];

			$rcarrusel=$_POST["rcarr"];

			$img1=$_POST["img1"];

			$img2=$_POST["img2"];

			$img3=$_POST["img3"];

			$img4=$_POST["img4"];

			$img5=$_POST["img5"];

			$img6=$_POST["img6"];

			$img7=$_POST["img7"];

			$enoticia=$_POST["enot"];

			$cnoticia=$_POST["cnot"];

			$cnoticia=rawurlencode(str_replace("%0D%0A","<br>",$cnoticia));

			$cflickr=$_POST["flickr"];

			$cface=$_POST["face"];

			$ccomentarios=$_POST["ccomentarios"];

			
			
			

			$sql="UPDATE carrusel SET id=:miID, fecha=:miFec, encabezado_carrusel=:eCarr, img_carrusel=:iCarr, resena_carrusel=:rCarr, img1=:Img1, img2=:Img2, img3=:Img3, img4=:Img4, img5=:Img5, img6=:Img6, img7=:Img7, encabezado_noticia=:eNot, cuerpo_noticia=:cNot, code_flickr=:cFlickr, code_face=:cFace, code_comentarios=:cCom WHERE id=:miID";
		
			$resultado=$base->prepare($sql);

			$resultado->execute(array(":miID"=>$id,":miFec"=>$fecha,":eCarr"=>$ecarrusel, ":iCarr"=>$icarrusel,":rCarr"=>$rcarrusel,":Img1"=>$img1,":Img2"=>$img2,":Img3"=>$img3, ":Img4"=>$img4, ":Img5"=>$img5, ":Img6"=>$img6, ":Img7"=>$img7,":eNot"=>$enoticia,":cNot"=>$cnoticia,":cFlickr"=>$cflickr,":cFace"=>$cface,":cCom"=>$ccomentarios));

			


				echo '<div class="registro_satisf"><h2>Registro guardado satisfactoriamente</h2></div>';
				//echo '<div class="registro_volver"><h2><a href="noticias.php">Volver a noticias</a></h2></div>';
				//echo "<script>alert('Registro ingresado correctamente. :)')</script>";
			}
	?>

	<!--Elementos de noticias-->
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<table>
			<tr><td class="celda_e_noticia" colspan="2"><h1>Noticia:</h1></td></tr>		
				
			<tr>
				<td class="celda_uno"><h3>ID</h3></td>
				<td class="celda_id"><label for="id"><input type="text" name="id"  size="3" maxlength="3" value="<?php echo $id?>"></td>
			</tr>	
			<tr>
				<td class="celda_uno"><h3>Fecha</h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="30" name="fec" value="<?php echo $fecha?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Encabezado de Carrusel:</h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="100" name="ecarr" value="<?php echo $ecarrusel?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Ruta de Imagen Carrusel:</h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="icarr" value="<?php echo $icarrusel ?>"></h3></td>
			<tr>
				<?php if($icarrusel==""){echo "";}else{echo '<td class='.'"'.'celda_uno'.'"'.'><h3>Imagen de Carrusel</h3></td><td class='.'"'.'celda_dos'.'"'.' ><img src='.'"'.$ruta_archivos.$icarrusel.'"'.' width='.'"'.'20%'.'"'.'></td>';}?>
			</tr>
			</tr>	
			<tr>
				<td class="celda_uno"><h3>Reseña de Carrusel:</h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="150" name="rcarr" value="<?php echo $rcarrusel ?>"></h3></td>
			</tr>
		</table>

		<!--Ruta de imagenes para noticias-->

		<table>
			<tr><td class="celda_imagenes" colspan="2"><h1>Imagenes</h1></td>
			<tr colspan="2"><td><a href="editor_fotos.php?id=<?php echo $id ?>">Ir a Asignador de Imágenes</a></td></tr>
			<tr>
				<td colspan="2">
					<?php if($img1==""){echo "";}else{echo '<img src='.'"'.$ruta_archivos.$img1.'"'.' width='.'"'.'20%'.'"'.'>';}?>
					<?php if($img1==""){echo "";}else{echo '<img src='.'"'.$ruta_archivos.$img2.'"'.' width='.'"'.'20%'.'"'.'>';}?>
					<?php if($img1==""){echo "";}else{echo '<img src='.'"'.$ruta_archivos.$img3.'"'.' width='.'"'.'20%'.'"'.'>';}?>
					<?php if($img1==""){echo "";}else{echo '<img src='.'"'.$ruta_archivos.$img4.'"'.' width='.'"'.'20%'.'"'.'>';}?>
					<?php if($img1==""){echo "";}else{echo '<img src='.'"'.$ruta_archivos.$img5.'"'.' width='.'"'.'20%'.'"'.'>';}?>
					<?php if($img1==""){echo "";}else{echo '<img src='.'"'.$ruta_archivos.$img6.'"'.' width='.'"'.'20%'.'"'.'>';}?>
					<?php if($img1==""){echo "";}else{echo '<img src='.'"'.$ruta_archivos.$img7.'"'.' width='.'"'.'20%'.'"'.'>';}?>
				</td>
				
			</tr>		
			<tr>
				<td class="celda_uno"><h3>Imagen 1 </h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="img1" value="<?php echo $img1 ?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Imagen 2 </h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="img2" value="<?php echo $img2 ?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Imagen 3 </h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="img3" value="<?php echo $img3 ?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Imagen 4 </h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="img4" value="<?php echo $img4 ?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Imagen 5 </h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="img5" value="<?php echo $img5 ?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Imagen 6 </h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="img6" value="<?php echo $img6 ?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Imagen 7 </h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="50" name="img7" value="<?php echo $img7 ?>"></h3></td>
			</tr>
		</table>

		<table>

			<tr>
				<td colspan="2"><h1>Seccion de Noticias</h1></td><tr>
				<td class="celda_uno"><h3>Encabezado de Noticia (En pagina de noticias)</h3></td>
				<td class="celda_dos"><input type="text" size="40" maxlength="100" name="enot" value="<?php echo $enoticia ?>"></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Cuerpo de Noticia (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="cnot"  rows="10" cols="40"><?php echo $cnoticia ?></textarea></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Codigo a embutir de FLICKR (Galería de Imagenes) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="flickr"  rows="5" cols="40"><?php echo $cflickr ?></textarea></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Codigo a embutir de Facebook (Galería de Imagenes) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="face"  rows="5" cols="40"><?php echo $cface ?></textarea></h3></td>
			</tr>
			<tr>
				<td class="celda_uno"><h3>Codigo a embutir de Facebook (Comentarios) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="ccomentarios"  rows="5" cols="40"><?php echo $ccomentarios ?></textarea></h3></td>
			</tr>
		
			<tr><td><input class="enviar "type="submit" name="actualizar" value="  Actualizar " ></td></tr>

		
		</table>


		</form>	
	</div>



</body>
</html>