<?php

define("SERVIDOR", "localhost");

define("USUARIO", "root");

define("CLAVE", "");

//Para llamar a la funcion desde otra clase, instanciar la clase mediante 
//require(); y llamar a la funcion 
obtenerConexionMySQLi();

function obtenerConexionMySQLi() {

   $server="localhost";

   $usuario="root";

   $clave="";

   //$bbdd="nombreBaseDatos";

   $con=mysqli_connect(SERVIDOR,USUARIO,CLAVE) or die("Problemas con la conexión a la base de datos:".mysqli_connect_error()) ;



   echo "<p>Conexión realizada con éxito <b>(MySQLi)</b>";

   echo'<script type="text/javascript">
                    
         alert("Conexión (MySQLi) realizada con éxito");
         window.location.href="conexionMySQLi.php";

        </script>';


   

   mysqli_set_charset($con,'utf8');

   return $con;

}

?>
