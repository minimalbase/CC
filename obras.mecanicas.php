<!-- este codigo que comienza aca en esta marca, y termina en la etiqueta que esta mas abajo --</nav>-- 
  debe ir en cada pagina de nuestra web, solo lo copiamos y pegamos para duplicar el esquema de la web
  en cada pagina, luego de la estiqueta --</nav>-- va el contenido individual de cada pagina hasta
  la etiqueta --<footer class="page-footer">-- que tambien se vuelve a duplicar para cada pagina, 
    lo ideal es tener el mismo navbar y footer en todas las paginas de la web, ver mas abajo ejemplos -->
    <?php
    include 'db_connect.php';
    
    date_default_timezone_set('America/Caracas');
    
    $current_day = date('N');
    $current_time = date('H:i:s');
    
    $sql = "SELECT * FROM working_hours WHERE day_of_week = $current_day";
    $result = $conn->query($sql);
    
    $status = 'closed';
    $status_text = 'Cerrado';
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['is_workday']) {
            if (($current_time >= $row['morning_start'] && $current_time < $row['morning_end']) ||
                ($current_time >= $row['afternoon_start'] && $current_time < $row['afternoon_end'])) {
                $status = 'open';
                $status_text = 'Abierto';
            }
        }
    }
    
    $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- fuente de google chakra -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link
      href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">

   <!-- libreria abierta agregada 1-materialize + iconos -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

   <!-- configuracion por defecto de html5 -->
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- titulo que aparece en el navegador -->
   <title>Obras mecanicas</title>

   <!-- aca podremos agregar un favicon de laweb, esto es el icono pequeño que aparece en el explorador
        normalmente deberia ser un icono o imagen en formato .ico o .png con tamaño de 16px x 16px (lo ideal)
        solo se sube el icono a la carpeta imagenes y luego ponemos la ruta en el href="./imagenes/facicon ejmp" -->
   <link rel="shortcut icon" href="" type="image/x-icon">

   <!-- linkeamos nuestro archivo .css nuestra hoja de estilos -->
   <link rel="stylesheet" href="./mainstyle.css">
</head>



<!-- aca empieza el --body-- cuerpo de la web -->

<body>
   <!-- aca esta el ejemplo perfecto para explicar como funcionan los aidi's --id--
       
      --esto es la manera que encontre de como hacer el boton del final de la pagina que te scrollea al inicio
       de la web al clickear, basicamente es un ancla con la etiqueta --a-- al cual le doy un link
       especifico --#top-- y un --id-- para luego configurarlo en (mainstyle.css) y el --#top-- nos sirve 
       para hacer la llamada desde el boton que ponemos en la parte final de la web , seguir explicacion en
       (mainstyle.css) buscar #scrollToTop -->
   <a href="#top" id="scrollToTop">.</a>




   <nav class="nav-extended">
      <div class="nav-wrapper">
         <a name="top" id="titulo-logo" href="./index.php" class="brand-logo">
            <span id="titulo-logo2" class="full-title"><i class="material-icons left">home</i> SERVICIOS <span
                  class="ydeltitulo">&</span> CONSTRUCCIONES BABILONIA</span>
            <span class="abbr-title"><i class="material-icons right">home</i>SCB</span>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            <ul class="navegacion-principal">
               <li><a href="./nuestro.equipo.php"><i class="material-icons left">center_focus_strong</i><span
                        class="texto-sn">SOBRE NOSOTROS</span></a></li>
               <li><a href="./contacto.php"><i class="material-icons right">mail</i><span class="texto-ec">ENTRAR EN
                        CONTACTO</span></a></li>
            </ul>
            <div id="status-container" style="float: right; margin-right: 20px;">
  Estado: <?php echo $status_text; ?>
  <span id="status-indicator" class="status-indicator status-<?php echo $status; ?>"></span>
</div>
      </div>
      <!-- estas son las tabs/menu secundario de la barra de navegacion -->
      <div class="nav-content">
         <ul class="tabs tabs-transparent">
            <li class="tab"><a href="./instrumentacion.php">Instrumentación <span class="flechita">→</span> </a></li>
            <li class="tab"><a href="./obras.civiles.php">Obras Civiles <span class="flechita">→</span> </a></li>
            <li class="tab"><a href="./obras.electricas.php">Eléctricas <span class="flechita">→</span> </a></li>
            <li class="tab"><a href="./obras.mecanicas.php">Mecánicas </a></li>

         </ul>
      </div>
   </nav>
   <!-- aca arriba termina la barra de navegacion este es el codigo que debes tener en todas tus paginas -->


   <!-- aca abajo va el contenido individual de cada web, es lo que cambia de codigo en cada pagina -->


   <p class="titulo-sliders">Diseño, fabricación, instalación y mantenimiento de sistemas mecánicos para maquinaria
      industrial, equipos de transporte u otras aplicaciones</p>

   <div id="sliderm">
      <input type="radio" name="sliderm" id="slide1" checked>
      <input type="radio" name="sliderm" id="slide2">
      <input type="radio" name="sliderm" id="slide3">
      <input type="radio" name="sliderm" id="slide4">
      <div id="slidesm">
         <div id="overflowm">
            <div class="inner">
               <div class="slide slide_1">
                  <div class="slide-content">
                     <h3>Soluciones personalizadas</h3>
                     <p>Soluciones mecánicas personalizadas para satisfacer las necesidades específicas de cada cliente
                     </p>
                  </div>
               </div>
               <div class="slide slide_2">
                  <div class="slide-content">
                     <h3></h3>
                     <p></p>
                  </div>
               </div>
               <div class="slide slide_3">
                  <div class="slide-content">
                     <h3></h3>
                     <p></p>
                  </div>
               </div>
               <div class="slide slide_4">
                  <div class="slide-content">
                     <h3></h3>
                     <p></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="controlsm">
         <label for="slide1"></label>
         <label for="slide2"></label>
         <label for="slide3"></label>
         <label for="slide4"></label>
      </div>
      <div id="bulletsm">
         <label for="slide1"></label>
         <label for="slide2"></label>
         <label for="slide3"></label>
         <label for="slide4"></label>
      </div>
   </div>





   <!-- esta es la otra parte del codigo que todas las paginas deberian tener, el footer y en este caso
     agregamos el boton, icono o flecha de volver a inicio para que se repita junto al footer de todas las
     paginas, es la etiqueta --a-- que esta encima de foooter a la cual solo le agregamos un icono
     al cual le dimos un --id="volver-btn-- para luego en css darle estilo, ir a mainstyle.css y 
     buscar --#volver-btn-- para mas info"  -->
   <a href="#top"><i id="volver-btn" class="material-icons medium">merge_type</i></a>
   <footer class="page-footer">
      <div class="footer-copyright">
         <div class="container">
            <!-- aca editas el copyright y la info o email  -->
            © 2024 Copyright S & C Babilonia
            <a class="grey-text text-lighten-4 right" href="#!">Email@Babilonia.com</a>
         </div>
      </div>
   </footer>

   <!-- scripts materialize, esto es una libreria visual simple que ayuda a dar acabado limpio -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>