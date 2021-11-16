<?php

include_once 'conexionPDO.php';

try {

          $conexion = new PDO("mysql:host=".SERVIDOR.";dbname=".BBDD, USUARIO, CLAVE);

          // Establecemos el modo de error de PDO para que salten excepciones

          $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $stmt = $conexion->prepare("SELECT id, codigo, marca, tipo, capacidad, carga, ciclos, estado FROM baterias");

          $stmt->execute();

           //OPCIÓN 1 

          foreach($stmt as $row){

              echo $row['id'] . " " . $row['codigo'] . " " . $row['marca'] . " " . $row['tipo'] . " " . $row['capacidad'] . " " . $row['carga'] . " " . $row['ciclos'] . " " . $row['estado'];

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