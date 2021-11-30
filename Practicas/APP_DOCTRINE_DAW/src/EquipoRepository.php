<?php

// src/EntityRepository.php

use Doctrine\ORM\EntityRepository;



class EquipoRepository extends EntityRepository

{   /*devuelve una colección con los jugadores del equipo, -1 si no encuentra el equipo*/

   public function getLista($nombre_equipo)

   {

       $equipo =  $this->getEntityManager()->getRepository('Equipo')->findOneBy(array('nombre' => $nombre_equipo));

       if(!$equipo)

       {

           return -1;

       }else

       {  

           $query = $this->getEntityManager()->createQuery("SELECT j FROM jugador j JOIN j.equipo e WHERE e.nombre = '$nombre_equipo'");

           return $query->getResult();        

          

       }                      

   }

}