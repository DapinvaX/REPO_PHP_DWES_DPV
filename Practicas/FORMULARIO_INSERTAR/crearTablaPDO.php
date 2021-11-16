<?php 

define("SERVIDOR", "localhost");

define("USUARIO", "root");

define("CLAVE", "");

define("BBDD", "BBDD_INSERTAR");


try {

    $con = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);
   
    // Establecemos el modo de error de PDO para que salten excepciones
   
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
   
   
   // sql para crear la tabla
   
   $sql = "CREATE TABLE usuariosBD (
   
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
   
      nombre VARCHAR(30) NOT NULL,
   
      primerApe VARCHAR(50),

      segundoApe VARCHAR(50),

      fechaNacimiento DATE()
   
      )";
   
   
   
    // se usa exec() porque la sentencia no devuelve resultados
   
    $con->exec($sql);
   
    echo "<p>La tabla usuariosBD fue creada con éxito";
   
   } catch(PDOException $e) {
   
    echo $sql . "<br>" . $e->getMessage();
   
   }
   
   
   
   $con = null;
   
   

?>