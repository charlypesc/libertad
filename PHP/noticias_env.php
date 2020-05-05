<?php

include 'cn.php';

$fecha = $_POST["fecha"];
$encabezado = $_POST["encabezado"];
$parrafo = $_POST["parrafo"];

$insertar = "INSERT INTO noticias(fecha, encabezado, parrafo) VALUES ('$fecha', '$encabezado', '$parrafo')";
$resultado = mysqli_query($conexion, $insertar);


if(!$resultado){
          echo 'problemas al salvar informacion';
}
else{     echo 'se guardo la informacion exitosamente';
          
}

mysqli_close($conexion); 

