<?php



//Método 1: Añadiendo el archivo conexion.php que obtiene la conexión

// leyendo los datos de conexión de un fichero .ini

include_once 'conexionMySQLi.php';



//Método 2: Usando un array para almacenar los datos de conexión.

// Este array puede ir fuera o dentro del fichero que va a usar la base de datos.

$dbConfig = array(

   'host' => 'localhost',

   'port' => '3306',

   'user' => 'usuarioDAW',

   'pass' => 'admin1234',

   'db' => 'dawBD',

);



//Método 3: Crear constantes para definir los datos de conexión.

//Estas constantes pueden ir dentro o fuera del fichero que va a usar la base de datos.

define("SERVIDOR", "localhost");

define("USUARIO", "usuarioDAW");

define("CLAVE", "admin1234");

define("BBDD", "dawBD");



// Crear una conexion

// En la conexión, indicamos la base de datos que queremos utilizar.



//Método 1

//La conexión nos la proporciona conexion.php



//Método 2

//$conexion = mysqli_connect($dbConfig['host'], $dbConfig['user'], $dbConfig['pass'], $dbConfig['db']);



//Método 3

//$conexion = mysqli_connect(SERVIDOR, USUARIO, CLAVE, BBDD);

// Comprobar la conexión

if (!$conexion) {

die("Error en la conexión: " . mysqli_connect_error());

}



//CONSTRUIMOS LA SENTENCIA SQL

$sql = "INSERT INTO participantes (nombre, numero,email) VALUES ('Luis', 23, 'luismr@ies.es')";



//EJECUTAMOS LA SENTENCIA

if (mysqli_query($conexion, $sql)) {

echo "<p>Nueva fila creada con éxito";

} else {

echo "Error: " . $sql . "<br>" . mysqli_error($conexion);

}



// CERRAR LA CONEXIÓN

mysqli_close($conexion);



?>