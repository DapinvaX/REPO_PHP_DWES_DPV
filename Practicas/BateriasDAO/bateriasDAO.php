<?php 

    include_once "conexionPDO.php";

function obtenerTIposBaterias(){

        $cnx = obtenerConexion();

        $tipos;

        //Establecemos el modo de error de PDO para que salten excepciones
        $sql= "SELECT * FROM baterias WHERE tipo";
        $stmt= $cnx->prepare($sql);
        $stmt->execute();

        foreach($stmt as $row){
            $tipos[]=$row;
        }


        return $tipos;

    }

function obtenerTodasBaterias(){
    
        $cnx = obtenerConexion();

        $baterias;

        $sql= "SELECT * FROM baterias";
        $stmt= $cnx->prepare($sql);
        $stmt->execute();

        foreach($stmt as $row){
            $baterias[]=$row;
        }


        return $baterias;

    }

function obtenerBateriasPorID(){

            $cnx = obtenerConexion();

            $bateriasID;

            $sql= "SELECT * FROM baterias WHERE id";
            $stmt= $cnx->prepare($sql);
            $stmt->execute();

            foreach($stmt as $row){
                $bateriasID[]=$row;
            }

            return $bateriasID;

        }

    ?>