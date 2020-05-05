<?php

		$nombre_imagen=$_FILES['imagen']['name'];
		$tipo_imagen=$_FILES['imagen']['type'];
		$tamano_imagen=$_FILES['imagen']['size'];

		$carpeta_destino=$_server['DOCUMENT_ROOT'].'/img/noticias/uploads/';
		move_uploaded_file($_FILES['imagen']['tmp_name']),$carpeta_destino.$nombre_imagen);

		
?>