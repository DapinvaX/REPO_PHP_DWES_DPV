<?php
    //Se crearán 2 cookies (ciclo y curso) que almacenarán sendos datos
   setcookie("ciclo", "DAW", time()+3600, "/","", 0);

   setcookie("curso", "2", time()+3600, "/", "",  0);

?>

<html>

   <head>

      <title>Configurando Cookies con PHP</title>

   </head>

   <body>

      <?php echo "Cookies establecida"?>

   </body>

 </html>