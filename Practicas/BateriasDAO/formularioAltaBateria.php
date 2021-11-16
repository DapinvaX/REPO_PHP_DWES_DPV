<?php 

    include_once "bateriasDAO.php";
    include_once "estacionesDAO.php";

    $tipos = obtenerTIposBaterias();

    foreach($tipos as $tipo){

        echo "<SELECT>";

            echo "<OPTION id=".$tipo["id"].">";

            echo "</OPTION>";

        echo "</SELECT>"


    }

    foreach($estaciones as $estacion){

        //SELECT
        echo "<SELECT>";

            echo "<OPTION id=".$estacion["id"].">";

            echo "</OPTION>";

        echo "</SELECT>"


    }

?>

b4