<?php


/*define("SERVIDOR", "localhost");

define("USUARIO", "root");

define("CLAVE", "");




// Crear una conexion

$con = mysqli_connect(SERVIDOR, USUARIO, CLAVE);

// Comprobar la conexión

if (!$con) {

 die("Error en la conexión: " . mysqli_connect_error());

}
*/

require "conexionMySQLi.php";

obtenerConexionMySQLi();


// Crear una base de datos

$sql = "CREATE DATABASE BBDD_Hospital";

if (mysqli_query($con, $sql)) {

 echo "Base de datos creada con éxito";

} else {

 echo "Error en la creación de la base de datos: " . mysqli_error($conn);

}



//Cerrar la conexión

mysqli_close($con);



?>