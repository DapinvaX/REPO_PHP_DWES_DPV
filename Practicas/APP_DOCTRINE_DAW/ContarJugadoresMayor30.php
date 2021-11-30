<?php

 require_once "bootstrap.php";

 require_once './src/Jugador.php';



 echo "Contar los jugadores mayores de 30 años<br>";

 $query_contar = $entityManager-> createQuery("SELECT COUNT(j.id) as num

                                           FROM jugador j

                                           WHERE j.edad>30");



 $num_jugadores = $query_contar ->getSingleScalarResult();

 echo "Número de jugadores: ".$num_jugadores."<br>";