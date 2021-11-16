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



// preparar y vincular

$stmt = $con->prepare("INSERT INTO Pacientes (nombre, direccion ) VALUES (?, ?)");

$stmt->bind_param("ss", $nombre, $direccion);



// establecemos los parámetros y ejecutamos

$nombre = "José";

$direccion = "Plaza Italia,9";

$stmt->execute();



$nombre = "María";

$direccion = "Av. las acacias,45";

$stmt->execute();



$nombre = "Julia";

$direccion = "Calle Doritos,11";

$stmt->execute();



echo "Las filas se han insertado correctamente";

/*
Esta función vincula los parámetros a la consulta SQL y le dice a la base de datos cuáles son los parámetros. El argumento "ss" enumera los tipos de datos que son los parámetros. El carácter s le dice a mysql que el parámetro es una cadena.

El argumento puede ser de cuatro tipos:

i - entero

d - doble

s - String

b - BLOB (Lo mismo que "string" o "text" solo que no diferencia entre mayusculas y minusculas)

Debemos tener uno de estos para cada parámetro.

Al decirle a mysql qué tipo de datos esperar, minimizamos el riesgo de inyecciones de SQL.
*/
$stmt->bind_param("ss", $nombre, $direccion); 


$stmt->close();

$con->close();



?>

