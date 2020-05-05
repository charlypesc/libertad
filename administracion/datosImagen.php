<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/ini.css">
	<title></title>
</head>
<body>

<?php
	
	$id=$_GET['id'];
	

//recibimos los datos de la imagen
	//$nombre_imagen_1	=$_FILES['icarr']['name'];
 	//$tipo_imagen_1		=$_FILES['icarr']['type'];
	//$tamano_imagen_1	=$_FILES['icarr']['size'];
	//$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/escuela/intranet/uploads/';
	
	include "config.php";	
	for ($i = 0; $i<= count($_FILES["icarr"]["name"]) -1; $i++ ){
	
		$img0=$_FILES["icarr"]["name"][0];
		$img0_t=$_FILES["icarr"]["type"][0];
		$img0_s=$_FILES["icarr"]["size"][0];


		$img1=$_FILES["icarr"]["name"][1];
		$img1_t=$_FILES["icarr"]["type"][1];
		$img1_s=$_FILES["icarr"]["size"][1];

		$img2=$_FILES["icarr"]["name"][2];
		$img2_t=$_FILES["icarr"]["type"][2];
		$img2_s=$_FILES["icarr"]["size"][2];

		$img3=$_FILES["icarr"]["name"][3];
		$img3_t=$_FILES["icarr"]["type"][3];
		$img3_s=$_FILES["icarr"]["size"][3];

		$img4=$_FILES["icarr"]["name"][4];
		$img4_t=$_FILES["icarr"]["type"][4];
		$img4_s=$_FILES["icarr"]["size"][4];

		$img5=$_FILES["icarr"]["name"][5];
		$img5_t=$_FILES["icarr"]["type"][5];
		$img5_s=$_FILES["icarr"]["size"][5];

		$img5=$_FILES["icarr"]["name"][5];
		$img5_t=$_FILES["icarr"]["type"][5];
		$img5_s=$_FILES["icarr"]["size"][5];

	
		$img6=$_FILES["icarr"]["name"][6];
		$img6_t=$_FILES["icarr"]["type"][6];
		$img6_s=$_FILES["icarr"]["size"][6];

		$img7=$_FILES["icarr"]["name"][7];
		$img7_t=$_FILES["icarr"]["type"][7];
		$img7_s=$_FILES["icarr"]["size"][7];	
}
?>


	


	<div class="wrap">
		<?php 
			include "_header_index.php";
		?>
	</div>
<!-- Imagen de carrusel  que corresponde a noticia-->
	<div ><h3>Imagen de Carrusel</h3><img src="<?php echo $ruta_archivos.$img0; ?> " width="25%"></div>	


<?php

	if($img0_s<=1000000){

			if($img0_t=="image/jpeg" || $img0_t=="image/jpg" || $img0_t=="image/png" || $img0_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][0],$ruta_archivos.$img0);
			
			}else{
					
					echo "El archivo ".$img0." no corresponde a una imagen ";
			
			}
		}else{
		
					echo "El archivo ".$img0."El tamaño excede el tamaño especificado";
		
		}


?>

<!-- Imagen 1 que corresponde a noticia-->

		<div><h3>Corresponde a Imagen de 1 de Noticias</h3><img src="<?php echo $ruta_archivos.$img1; ?>"width="25%"></div>

	<?php

	if($img1_s<=1000000){

			if($img1_t=="image/jpeg" || $img1_t=="image/jpg" || $img1_t=="image/png" || $img1_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][1],$ruta_archivos.$img1);
			
			}
			else{
					
					echo "El archivo ".$img1." no corresponde a una imagen ";
			
				}
	}
	else{
		
					echo "El archivo ".$img1."El tamaño excede el tamaño especificado";
	}

	?>


<!-- Imagen 2 que corresponde a noticia-->


	<div><h3>Corresponde a Imagen de 2 de Noticias</h3><img src="<?php echo $ruta_archivos.$img2; ?>"width="25%"></div>
<?php

	if($img2_s<=1000000){

			if($img2_t=="image/jpeg" || $img2_t=="image/jpg" || $img2_t=="image/png" || $img2_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][2],$ruta_archivos.$img2);
			
			}
			else{
					
					echo "El archivo ".$img2." no corresponde a una imagen ";
			
				}
	}
	else{
		
					echo "El archivo ".$img2."El tamaño excede el tamaño especificado";
	}
?>

<!-- Imagen 3 que corresponde a noticia-->

	<div><h3>Corresponde a Imagen de 3 de Noticias</h3><img src="<?php echo $ruta_archivos.$img3; ?>"width="25%"></div>

	<?php

	if($img3_s<=1000000){

			if($img3_t=="image/jpeg" || $img3_t=="image/jpg" || $img3_t=="image/png" || $img3_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][3],$ruta_archivos.$img3);
			
			}
			else{
					
					echo "El archivo ".$img3." no corresponde a una imagen ";
			
				}
	}
	else{
		
					echo "El archivo ".$img3."El tamaño excede el tamaño especificado";
	}

	?>

<!-- Imagen 4 que corresponde a noticia-->

	<div><h3>Corresponde a Imagen de 4 de Noticias</h3><img src="<?php echo $ruta_archivos.$img4; ?>"width="25%"></div>

	<?php

	if($img4_s<=1000000){

			if($img4_t=="image/jpeg" || $img4_t=="image/jpg" || $img4_t=="image/png" || $img4_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][4],$ruta_archivos.$img4);
			
			}
			else{
					
					echo "El archivo ".$img4." no corresponde a una imagen ";
			
				}
	}
	else{
		
					echo "El archivo ".$img4."El tamaño excede el tamaño especificado";
	}

	?>

	<!-- Imagen 5 que corresponde a noticia-->

	<div><h3>Corresponde a Imagen de 5 de Noticias</h3><img src="<?php echo $ruta_archivos.$img5; ?>"width="25%"></div>

	<?php

	if($img5_s<=1000000){

			if($img5_t=="image/jpeg" || $img5_t=="image/jpg" || $img5_t=="image/png" || $img5_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][5],$ruta_archivos.$img5);
			
			}
			else{
					
					echo "El archivo ".$img5." no corresponde a una imagen ";
			
				}
	}
	else{
		
					echo "El archivo ".$img5."El tamaño excede el tamaño especificado";
	}

?>

	<!-- Imagen 6 que corresponde a noticia-->

	<div><h3>Corresponde a Imagen de 6 de Noticias</h3><img src="<?php echo $ruta_archivos.$img6; ?>"width="25%"></div>

<?php

	if($img6_s<=1000000){

			if($img6_t=="image/jpeg" || $img6_t=="image/jpg" || $img6_t=="image/png" || $img6_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][6],$ruta_archivos.$img6);
			
			}
			else{
					
					echo "El archivo ".$img6." no corresponde a una imagen ";
			
				}
	}
	else{
		
					echo "El archivo ".$img6."El tamaño excede el tamaño especificado";
	}

?>

	<!-- Imagen 7 que corresponde a noticia-->

	<div><h3>Corresponde a Imagen de 7 de Noticias</h3><img src="<?php echo $ruta_archivos.$img7; ?>"width="25%"></div>

<?php

	if($img7_s<=1000000){

			if($img7_t=="image/jpeg" || $img7_t=="image/jpg" || $img7_t=="image/png" || $img7_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][7],$ruta_archivos.$img7);
			
			}
			else{
					
					echo "El archivo ".$img7." no corresponde a una imagen ";
			
				}
	}
	else{
		
					echo "El archivo ".$img7."El tamaño excede el tamaño especificado";
	}

?>

<?php
	include "conexion.php";

	
	$sql="UPDATE carrusel SET img_carrusel=:iCarr,img1=:Img1, img2=:Img2,img3=:Img3,img4=:Img4,img5=:Img5,img6=:Img6,img7=:Img7 WHERE id=$id";
	$resultado=$base->prepare($sql);
	$resultado->execute(array(":iCarr"=>$img0, ":Img1"=>$img1, ":Img2"=>$img2, ":Img3"=>$img3, ":Img4"=>$img4, ":Img5"=>$img5, ":Img6"=>$img6, ":Img7"=>$img7));

	//echo "<script>alert('Fotografia subio correctamente, chequea en Actualizaciones')</script>";

	

?>

	
	</body>
</html>