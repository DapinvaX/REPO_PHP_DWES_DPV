<?php

require_once "bootstrap.php";

require_once './src/Equipo.php';

$nuevo = new Equipo();

$nuevo->setNombre('Sevilla F.C.');

$nuevo->setFundacion(1890);

$nuevo->setSocios(50000);

$nuevo->setCiudad('Sevilla');

$entityManager->persist($nuevo);

$entityManager->flush();

echo "Equipo insertado " . $nuevo->getId() . "\n";

?>