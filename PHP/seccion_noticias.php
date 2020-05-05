<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <title>Seccion de Noticias</title>
          <link rel="stylesheet" href="css/estilos_noticias.css">
</head>
<body>
        <div class="wrap" href="noticias_env.php">
                 
                  <section class="noticias">
                  
                  <h1>Bienvenidos a nuestra sección de noticias</h1>
                  
                  <?php 
                            include("cn.php");
                            $query="SELECT * FROM noticias";
                            $resultado= $conexion->query($query);
                            while($row=$resultado->fetch_assoc()){
                    ?>     
                    <div class="fecha_not">
                      <?php 
                        echo '<a href="otra_pagina.php?idRegistro='.$row['id'].'">'; ?><h3><?php echo $row['id'];?></h3></a>
                    </div>
                    <div class="fecha_not"><h3><?php echo $row['fecha'];?></h3></div>
                    <div class="header_noticia"><?php echo '<a href="otra_pagina.php?idRegistro='.$row['id'].'">';?>
                      <h2><?php echo $row['encabezado'];?>
                      </h2>
                    </div></a>
                          

                          <?php
                          }
                            ?>
                            
                  </section>
        
         </div>
         
         
          
</body>
</html>