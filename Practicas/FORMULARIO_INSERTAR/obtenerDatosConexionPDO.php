<?php

include_once 'conexionPDO.php';

try {

          $conexion = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);

          // Establecemos el modo de error de PDO para que salten excepciones

          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $stmt = $conexion->prepare("SELECT id, nombre, primerApe, segundoApe, fechaNacimiento FROM usuariosBD");

          $stmt->execute();

           //OPCIÓN 1 

          foreach($stmt as $row){

              echo $row['id'] . " " . $row['nombre'] " " . $row['primerApe'] " " . $row['segundoApe'] " " . $row['fechaNacimiento'] ;

              echo "<br/>";

             }



          //OPCIÓN 2

            //$datos = array();

            //$datos = $stmt->fetchAll();



      } catch(PDOException $e) {

      echo "Error: " . $e->getMessage();

      }

      $conexion = null;

?>