<?php

// ejemplo_basicos.php

require_once "bootstrap.php";

require_once './src/Equipo.php';

// buscar por clave primaria

$eq = $entityManager->find("Equipo", 1);

// mostrar datos

echo $eq->getSocios();

?>

