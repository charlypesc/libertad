<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
	<title></title>
	
</head>
<body>

	<div class="wrap">
	<?php

	include "_header_index.php";

	?>
	</div>

		<div id="wrap_form_not">	
				
				<div class="form_not_cabecera">	

						<h1>Edición de noticias</h1>
						<h2>A continuación edita la noticia y pulsa actualizar, los cambios se verán inmediatamente reflejados en la página web del colegio</h2><br>
				</div>
	<?php

		include ("conexion.php");
		if(!isset($_POST["actualizar"])){

			$id=$_GET["id"];

			$sql="SELECT id, fecha FROM carrusel WHERE id=$id";

			$resultado=$base->prepare($sql);

			$resultado->execute();
			
			
			while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){

				
			}			

			
			
		}else{

			$id=$_POST["id"];
			$fecha=$_POST["fec"];

			

			$sql="UPDATE carrusel SET id=:miID, fecha=:miFec WHERE id=:miID";
		
			$resultado=$base->prepare($sql);

			$resultado->execute(array(":miID"=>$id,":miFec"=>$fecha));

			//header("location:form_noticias.php");

				
						
		}	



	?>

		<table><tr><td class="celda_e_noticia" colspan="2"><h1>Elemento de Noticia:</h1></td>		
		
		<tr>
			<td class="celda_uno"><h3>ID</h3></td>
			<td class="celda_dos"><input type="text" size="15" maxlength="3" name="id" value=""></td>
		</tr>	
		<tr>
			<td class="celda_uno"><h3>Fecha</h3></td>
			<td class="celda_dos"><input type="text" size="15" maxlength="3" name="id" value=""></h3></td>
		</tr>
		<tr>
			<td class="celda_uno"><h3>Encabezado de Carrusel:</h3></td>
			<td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value=""></h3></td>
		</tr>
		<tr>
			<td class="celda_uno"><h3>Ruta de Imagen Carrusel:</h3></td>
			<td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value=""></h3></td>
		</tr>	
		<tr>
			<td class="celda_uno"><h3>Reseña de Carrusel:</h3></td>
			<td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value=""></h3></td>

		</table>

		//Tabla con CELDA DE FOTOGRACIAS - RUTAS

		echo '<table><tr><td class="celda_imagenes" colspan="2"><h1>Ruta de Imagenes para Noticia</h1></td>';

		echo '<tr><td class="celda_uno"><h3>Imagen 1 </h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['img1'].'"'.'></h3></td>';
		echo '<tr><td class="celda_uno"><h3>Imagen 2 </h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['img2'].'"'.'></h3></td>';
		echo '<tr><td class="celda_uno"><h3>Imagen 3 </h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['img3'].'"'.'></h3></td>';
		echo '<tr><td class="celda_uno"><h3>Imagen 4 </h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['img4'].'"'.'></h3></td>';
		echo '<tr><td class="celda_uno"><h3>Imagen 5 </h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['img5'].'"'.'></h3></td>';
		echo '<tr><td class="celda_uno"><h3>Imagen 6 </h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['img6'].'"'.'></h3></td>';
		echo '<tr><td class="celda_uno"><h3>Imagen 7 </h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['img7'].'"'.'></h3></td>';
		echo '</table>';

		//SECCION DE NOTICIAS Y CODIGO PARA FACE FLICKR, ETC

		echo '<table>';

		echo '<tr><td colspan="2"><h1>Seccion de Noticias (Pagina de Noticias)</h1></td>';

		echo '<tr><td class="celda_uno"><h3>Encabezado de Noticia (En pagina de noticias)</h3></td><td class="celda_dos"><input type="text" size="40" maxlength="3" name="id" value='.'"'.$registro['encabezado_noticia'].'"'.'></h3></td>';

		echo '<tr><td class="celda_uno"><h3>Cuerpo de Noticia (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name=""  rows="10" cols="40">'.$registro['cuerpo_noticia'].'</textarea></h3></td>';

		echo '<tr><td class="celda_uno"><h3>Codigo a embutir de FLICKR (Galería de Imagenes) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name=""  rows="5" cols="40">'.$registro['code_flickr'].'</textarea></h3></td>';

		echo '<tr><td class="celda_uno"><h3>Codigo a embutir de Facebook (Galería de Imagenes) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name=""  rows="5" cols="40">'.$registro['code_face'].'</textarea></h3></td>';	

		echo '<tr><td class="celda_uno"><h3>Codigo a embutir de Facebook (Comentarios) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name=""  rows="5" cols="40">'.$registro['code_comentarios'].'</textarea></h3></td>';	

		echo '</table>';
			</div>

	</div>
</body>
</html>