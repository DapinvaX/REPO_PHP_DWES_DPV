<?php

   setcookie( "ciclo", "", time()- 60, "/","", 0);

   setcookie( "curso", "", time()- 60, "/","", 0);

?>

<html>

   <head>

      <title>Eliminando Cookies con PHP</title>

   </head>

   <body>

      <?php echo "Cookies eliminadas" ?>

   </body>

 </html>