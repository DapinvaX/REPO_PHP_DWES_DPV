<?php 

define("SERVIDOR", "localhost");

define("USUARIO", "root");

define("CLAVE", "");



function obtenerConexionMysql() {

   $server="localhost";

   $usuario="root";

   $clave="";

   //$bbdd="nombreBaseDatos";

   $con=mysqli_connect(SERVIDOR,USUARIO,CLAVE) or die("Problemas con la conexión a la base de datos:".mysqli_connect_error()) ;



   echo "<p>Conexión realizada";

   mysqli_set_charset($con,'utf8');

   return $con;

}
/*Para cerrar la conexion (MySQLi)

    mysqli_close($conexion);

*/
?>