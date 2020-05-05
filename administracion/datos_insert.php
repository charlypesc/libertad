<!DOCTYPE html>
<html>
<head>
	<title>Process datos insert</title>
</head>
<body>

<?php

include "config.php";


			
		$fecha						=$_POST["fecha"];		
		$encabezado_carrusel		=$_POST["e_carrusel"];
		$resena_carrusel			=$_POST["r_carrusel"];
		//pendiente la fotografía
		$encabezado_noticia			=$_POST["e_noticia"];
		$cuerpo_noticia				=$_POST["c_noticia"];
		$cnoticia=rawurlencode(str_replace("%0D%0A","<br>",$cnoticia));	
		$code_flickr				=$_POST["code_flickr"];		
		$code_face					=$_POST["code_face"];		
		$face_comentarios			=$_POST["face_comentarios"];


//-----------------------------> fotografía



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



		


	
}	

if($img0_s<=1000000){

			if($img0_t=="image/jpeg" || $img0_t=="image/jpg" || $img0_t=="image/png" || $img0_t=="image/gif"){

					move_uploaded_file($_FILES["icarr"]["tmp_name"][0],$ruta_archivos.$img0);
			
			}else{
					
					echo "El archivo ".$img0." no corresponde a una imagen ";
			
			}
		}else{
		
					echo 'El archivo ".$img0."El tamaño excede el tamaño especificado';
		
		}


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



include "conexion.php";

		$sql="INSERT INTO carrusel(fecha, encabezado_carrusel, img_carrusel, resena_carrusel, img1, img2, img3, img4, img5, img6, encabezado_noticia, cuerpo_noticia, code_flickr, code_face, code_comentarios) VALUES (:fecha, :encabezado_carrusel, :Icarr, :resena_carrusel,:Img1,:Img2,:Img3,:Img4,:Img5,:Img6, :encabezado_noticia, :cuerpo_noticia, :code_flickr, :code_face, :face_comentarios)";
			
			$resultado=$base->prepare($sql);
			
			//$resultado->execute(array($buscar));

			$resultado->execute(array(":fecha"=>$fecha, ":encabezado_carrusel"=>$encabezado_carrusel,":Icarr"=>$img0, ":resena_carrusel"=>$resena_carrusel,":Img1"=>$img1,":Img2"=>$img2,":Img3"=>$img3, ":Img4"=>$img4,":Img5"=>$img5, ":Img6"=>$img6, ":encabezado_noticia"=>$encabezado_noticia, ":cuerpo_noticia"=>$cuerpo_noticia,":code_flickr"=>$code_flickr, ":code_face"=>$code_face, ":face_comentarios"=>$face_comentarios));


					echo '<script>alert("Registro ingresado correctamente");location.href="noticias.php"</script';
					
?>




</body>
</html>