<html>

   

   <head>

      <title>Accediendo a Cookies con PHP</title>

   </head>

   <body>

      <?php

         if( isset($_COOKIE["ciclo"]))

            echo "Bienvenido" . $_COOKIE["ciclo"] . "<br />";

         else

            echo "Lo siento...no se ha reconocido" . "<br />";

      ?>

   </body>

</html>