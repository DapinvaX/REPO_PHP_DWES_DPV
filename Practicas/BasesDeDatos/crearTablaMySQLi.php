<?php

define("SERVIDOR", "localhost");

define("USUARIO", "root");

define("CLAVE", "");

define("BBDD", "miBBDD");



// Crear una conexion

// En la conexión, indicamos la base de datos que queremos utilizar.

$con = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BBDD);

// Comprobar la conexión

if (!$con) {

 die("Error en la conexión: " . mysqli_connect_error());

}



// sql para crear la tabla

$sql = "CREATE TABLE Pacientes (

   id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

   nombre VARCHAR(30) NOT NULL,

   direccion VARCHAR(50)

   )";



if ($con->query($sql) === TRUE) {

 echo "La tabla Pacientes se ha creado con éxito";

} else {

 echo "Error al crear la tabla: " . $con->error;

}

// Cerramos la conexión

$con->close();

?>