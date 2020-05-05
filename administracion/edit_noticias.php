<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form name="form_noticias" method="post" action="edit.php">
		
		<style type="text/css">
			* {
				width:100%;
				font-family: sans-serif;
				font-size:12px;
			}
			h1{
				text-align: center;
				margin-bottom: 50px;	
			}
			body{
				width:70%;
				margin:auto;
				
			}
			div {
				display: flex;
				margin: 10px 10px;

			}
			input{
				margin-left: 10px;
				height: 30px;
			}
			tr, td, .enviar  {
				margin: auto;	
				width: 60px;
			}</style>

		<h1>Formulario de Noticias</h1>

		<div label for="id"><h2>id</h2><input type="text" size="15" maxlength="3" name="id"></div>

		<div label for="fecha"><h2>Fecha:</h2><input type="text" size="15" maxlength="50" name="fecha"></div>

		<div label for="e_carrusel"><h2>Encabezado de Carrusel:</h2><input type="text" size="15" maxlength="150" name="e_carrusel"></div>

		<div label for="r_carrusel"><h2>Reseña de Carrusel:</h2><input type="text" size="15" maxlength="150"  name="r_carrusel"></div>
		
		<div><h2>Aca va las fotografías</h2></div>

		<div><h2>Encabezado de Noticia (en cuerpo de noticia):</h2><input type="text" size="15" maxlength="150" name="e_noticia"></div>

		<div><h2>Cuerpo de Noticia:</h2></div><br>

		<div><textarea name="c_noticia"  rows="10" cols="40">Escribe aquí el cuerpo de parrafo</textarea></div>	

		<div><h2>Codigo de flickr:</h2><input type="text" size="15" maxlength="700" name="code_flickr"></div>	

		<div><h2>Codigo de face (fotos):</h2><input type="text" size="15" maxlength="300" name="code_face"></div>

		<div><h2>Codigo de face (comentarios):</h2><input type="text" size="15" maxlength="300" name="face_comentarios"></div>

		<tr><td><input class="enviar "type="submit" name="enviar" value="Publicar" ></td></tr>		
		
	</form>
</body>
</html>