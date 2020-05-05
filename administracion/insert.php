<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
	<script src="js/test.js"></script>
	<title>Ingreso de noticia nueva</title>

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
		?>
	</div>	
		
	<!--Elementos de noticias-->

	<div id="wrap_form_not">
				<form method="POST" action="datos_insert.php" enctype="multipart/form-data">
					<div class="insert_cabeza">
						<h1>Nueva noticia</h1>
						<h3>En esta sección podrás ingresar un nuevo titular, este será inmediatamente publicado</h3>
					</div>
					<table>
						<tr><td class="celda_e_noticia" colspan="2"><h2>Elemento de Noticia:</h2></td></tr>		
					<!--<tr>
						<td class="celda_uno"><h3>ID</h3></td>
						<td class="celda_id"><label for="id"><input type="text" name="id"  size="2" maxlength="3" value=""></td>
					</tr>-->	
					<tr>
						<td class="celda_uno"><h3>Fecha</h3></td>
						<td class="celda_dos"><input type="text" size="40" maxlength="30" name="fecha" value=""></h3></td>
					</tr>
					<tr>
						<td class="celda_uno"><h3>Encabezado de Carrusel:</h3></td>
						<td class="celda_dos"><input type="text" size="40" maxlength="100" name="e_carrusel" value=""></h3></td>
					</tr>
					<tr>
						<td class="celda_uno"><h3>Reseña de Carrusel:</h3></td>
						<td class="celda_dos"><input type="text" size="40" maxlength="150" name="r_carrusel" value=""></h3></td>
					</tr>
				</table>

				<!--Ruta de imagenes para noticias-->
				<div class="img_insert_noticias_cab">
						<h2>Seccion de Imagenes</h2>
						<h3>Selecciona acá imagenes que saldran en la noticia misma:</h3>
				</div>
				<div class="img_insert_noticias">

<!------------------------------Columna Uno---------------------------------------------------->
					
						<div class="insert_foto_columna_uno">
							<div class="img__input">
								
								<input type="file" name="icarr[]" id="archivos">
								<label for="archivos" class="cuadrado_insert1">Carrusel</label>
								<section id="zonadatos">No hay informacion</section>
							</div>
							<div class="img__input">

								<input type="file" name="icarr[]" id="archivos1">
								<label for="archivos1" class="cuadrado_insert2">Imagen 1</label>
								<section id="zonadatos1">No hay informacion</section>	
							</div>
							<div class="img__input">
								<input type="file" name="icarr[]" id="archivos2">
								<label for="archivos2" class="cuadrado_insert1">Imagen 2</label>
								<section id="zonadatos2">No hay informacion</section>
							</div>
							<div class="img__input">
								<input type="file" name="icarr[]" id="archivos3">
								<label for="archivos3" class="cuadrado_insert2">Imagen 3</label>
								<section id="zonadatos3"><p>No hay informacion</p></section>	
							</div>
						</div>
<!-----------------------------------Division col---------------------------------------------->							

						<div class="insert_foto_columna_dos">
							<div class="img__input">
								<input type="file" name="icarr[]" id="archivos4">
								<label for="archivos4" class="cuadrado_insert1">Imagen 4</label>
								<section id="zonadatos4">No hay informacion</section>
							</div>
							<div class="img__input">
								<input type="file" name="icarr[]" id="archivos5">
								<label for="archivos5" class="cuadrado_insert2">Imagen 5</label>
								<section id="zonadatos5"><p>No hay informacion</p></section>	
							</div>
							<div class="img__input">
								<input type="file" name="icarr[]" id="archivos6">
								<label for="archivos6" class="cuadrado_insert1">Imagen 6</label>
								<section id="zonadatos6">No hay informacion</section>
							</div>
						</div>
				</div>




<!--------------------------------------------------------------------------------------------->

				<table>

					<tr>
						<td colspan="2"><h2>Seccion de Noticias (Pagina de Noticias)</h2	></td><tr>
						<td class="celda_uno"><h3>Encabezado de Noticia (En pagina de noticias)</h3></td>
						<td class="celda_dos"><input type="text" size="40" maxlength="100" name="e_noticia" value=""></h3></td>
					</tr>
					<tr>
						<td class="celda_uno"><h3>Cuerpo de Noticia (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="c_noticia"  rows="10" cols="40"></textarea></h3></td>
					</tr>
					<tr>
						<td class="celda_uno"><h3>Codigo a embutir de FLICKR (Galería de Imagenes) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="code_flickr"  rows="5" cols="40"></textarea></h3></td>
					</tr>
					<tr>
						<td class="celda_uno"><h3>Codigo a embutir de Facebook (Galería de Imagenes) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="code_face"  rows="5" cols="40"></textarea></h3></td>
					</tr>
					<tr>
						<td class="celda_uno"><h3>Codigo a embutir de Facebook (Comentarios) (En pagina de noticias)</h3></td><td class="celda_dos"><textarea name="face_comentarios"  rows="5" cols="40"></textarea></h3></td>
					</tr>
				
					<tr><td><input class="enviar "type="submit" name="actualizar" value="  Actualizar " ></td></tr>


				</table>


		</form>	
		</div>
		
	</body>
</html>
