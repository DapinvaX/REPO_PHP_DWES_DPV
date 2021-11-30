<?php

// ejemplo_basicos.php

require_once "bootstrap.php";

require_once './src/Equipo.php';



// Aquí puede haber código



$eq->setSocios(70000);

$entityManager->flush();

// si el equipo no existe devuelve null

$eq = $entityManager->find("Equipo", 4);

if(!$eq){

   echo "Equipo no encontrado";

}