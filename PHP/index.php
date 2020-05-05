<?php

include ("cabecera.php");

?>
<body>
         
          <h1 class="form_titulo">Formulario de Envio de Noticias</h1> 
          
          <form action="noticias_env.php" method="post" class="form_noticias">
          <div class="contenedor_inputs">
            <h2>Indica fecha de actividad noticiosa</h2>
            <input type="text" name="fecha" placeholder="Fecha" class="form_fecha">
            <h2>Indica el encabezado</h2>
            <input type="text" name="encabezado" placeholder="Encabezado" class="form_encabezado">
            <h2>Cuerpo de noticia (se debe usar etiquetas html)</h2>
            <input type="textarea" name="parrafo" placeholder="Cuerpo Noticias" class="form_parrafo">       
          </form>
          <form action="imagen.php" method="POST" class="img_send" enctype="multipart/form-data">
            <h2>Seccion de fotos Noticias</h2>
            <h4>Puedes adjuntar hasta 5 imagenes</h4>
            <label for="imagen"></label>
            <input type="file" name="imagen">
            <label for="imagen"></label>
            <input type="file" name="imagen">
            <label for="imagen"></label>
            <input type="file" name="imagen">
            <label for="imagen"></label>
            <input type="file" name="imagen">
            <label for="imagen"></label>
            <input type="file" name="imagen">
          </form>
          <h2>Seccion de fotos Noticias Thumbs</h2>
          <h4>Puedes adjuntar solo 1 imagen</h4>
          <label for="imagen"></label>
            <input type="file" name="imagen">     
          <input type="submit" name="adjuntando" value="Enviar noticia">                
          </div> 
</body>
</html>