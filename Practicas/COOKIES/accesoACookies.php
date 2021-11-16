<html>

   

   <head>

      <title>Acediendo a Cookies con PHP</title>

   </head>

   <body>      

      <?php

         echo $_COOKIE["ciclo"]. "<br />";

         /* Es equivalente a */

         echo $HTTP_COOKIE_VARS["ciclo"]. "<br />";

         

         echo $_COOKIE["curso"] . "<br />";

         /* Es equivalente a */

         echo $HTTP_COOKIE_VARS["curso"] . "<br />";

      ?>

      

   </body>

</html>