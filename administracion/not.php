<?php

include "conexion.php";
include "config.php";

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

        $cflickr=$registro['code_flickr'];

        $cface=$registro['code_face'];

        $ccomentarios=$registro['code_comentarios'];

        
      }     



include "config.php";



?>

<!DOCTYPE html>
<html lang="en"></html>
<head>
  <meta charset="UTF-8"/>
  <title>Escuela Libertad Puerto Montt</title>
  <link rel="stylesheet" href="../css/noticia.css?20181703"/>
  <script src="../js/jquery-3.2.1.min.js"></script>
  <script src="../js/slide_noticia.js"></script>

<meta property="og:url" content="http://www.elibertad.cl/administracion/not.php?id=<?php echo $id ?>"/>
<meta property="og:type" content="article"/>
<meta property="og:title" content="<?php echo $ecarrusel ?>"/>
<meta property="og:description" content="<?php echo $rcarrusel?>...Ver más"/>
<meta property="og:image" content="<?php echo $og_ruta_archivos.$icarrusel ?>" />
</head>



<body>
  <div class="banner1"></div>
  <div class="banner2"></div>
  <section id="nav_cero">
    <div class="box_one">
      <h1>Escuela <span>Libertad</span></h1>
    </div>
    <div class="box_two">
      <nav>
        <ul>
          <li><a href="/index.php">Home</a></li>
        </ul>
        <ul>
          <li><a href="/historia.php"><span>Historia</span></a></li>
        </ul>
        <ul>
          <li><a href="/integracion.php">Integracion</a></li>
        </ul>
        <ul>
          <li><a href="/planespropios.php"><span>Talleres</span></a></li>
        </ul>
        <ul>
          <li><a href="/ProyectoEducativo.php">PEI</a></li>
        </ul>
      </nav>
    </div>
  </section>



  <!--script de fotografia-->

  <div class="wrap">
    <h3></h3>
    <!-- <div class="cabenoticia"><img src="../img/pueblos_originarios/barra.gif" alt=""/>
      <h2>Tarde Recreativa</h2>
    </div> -->

    <ul class="slider">
      <li><img src="<?php echo $ruta_archivos.$icarrusel;?>" alt=""/></li>
      <li><img src="<?php echo $ruta_archivos.$img1;?>"alt=""/></li>
      <li><img src="<?php echo $ruta_archivos.$img2;?>"  alt=""/></li>
      
    </ul>
    <ol class="pagination"></ol>
    <h3><?php echo $fecha;?></h3>
    <div class="cab__noticia"><img src="../img/pueblos_originarios/barra.gif" alt=""/>
      <h1><?php echo $ecarrusel;?></h1>

    </div>
    <div>
      <h3><?php echo $rcarrusel;  ?></h3>
    </div>

    <div class="noticiauno">
        <div class="not__parr"><p> 
          <?php
          $cnoticia=rawurldecode(str_replace("%0D%0A","<br>",$cnoticia));
          echo $cnoticia;

          ?>
          </p>

        </div>
              <?php
                echo $cface;
                ?>    

    </div>
    <div class="box__megusta">

    </div>
    <div class="box__comentario">
        <div class="box__comentario"></div>
        <!-- Script de Comentario-->
        <?php
        
              echo $ccomentarios;

        ?>  
        
    </div>
    <div><?php echo $cflickr; ?></div>
    
    <footer>
      <div class="direccion"><span class="icon-compass"></span>
        <h1>Dirección: Iquique 230, Poblacion Libertad - Puerto Montt</h1>
      </div>
      <div class="telefono"><span class="icon-phone"></span>
        <h1>Telefono : 65 2 484525</h1>
      </div>
      <div class="mail"><span class="icon-inbox"></span>
        <h1>libertad@escuelas.dempuertomontt.cl</h1>
      </div>
      <div class="face"><a href="https://www.facebook.com/esc.libertad.39"><span class="icon-facebook-official"></span></a></div><span class="icon-youtube-square"></span>
    </footer>
  </div>
</body>