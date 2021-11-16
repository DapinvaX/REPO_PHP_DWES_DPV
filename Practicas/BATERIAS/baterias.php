<?php



require ("conexionPDO.php");



class bateria{



    private $conexion;

    



   /*function paciente()

   {

      $this->conexion = obtenerConexionBD();

     

   }*/

   public function __construct()
{
   $this->conexion = obtenerConexion();
}



function listar_baterias(){

  
   try {
   
      $stmt = $this->conexion->prepare("SELECT `codigo``marca``tipo``carga``capacidad``ciclos``estado` FROM `baterias`");

      

       $stmt->execute();
      
       


   } catch(PDOException $e) {

   echo "Error: " . $e->getMessage();

   }

   return $stmt;



}


   function aniadir_bateria($codigo, $marca, $tipo, $carga, $ciclos, $estado){



       try {

         
         $codigo_bateria = "";
         $marca_bateria = "";
         $tipo_bateria = "";
         $carga_bateria = "";
         $ciclos_bateria = "";
         $estado_bateria = "";

           // preparar y vincular parámetros

           $stmt = $this->conexion->prepare("INSERT INTO baterias (codigo,marca, tipo, carga, ciclos, estado ) 
                                             VALUES (:codigo, :marca, :tipo, :carga, :ciclos, :estado)");


            $stmt->bindParam(':marca', $codigo_bateria);

            $stmt->bindParam(':tipo', $marca_bateria);

            $stmt->bindParam(':carga', $tipo_bateria);

            $stmt->bindParam(':ciclos', $carga_bateria);

            $stmt->bindParam(':estado', $ciclos_bateria);

            $stmt->bindParam(':estado', $estado_bateria);


       

           // establecemos los parámetros y ejecutamos para insertar

           $codigo_bateria = $codigo;
           $marca_bateria = $marca;
           $tipo_bateria = $tipo;
           $carga_bateria = $carga;
           $ciclos_bateria = $ciclos;
           $estado_bateria = $estado;



           $stmt->execute();

   

    } catch(PDOException $e) {

           echo "Error: " . $e->getMessage();

    }



   }


function obtener_bateria_por_codigo($codigo){

  
   try {
   
      $stmt = $this->conexion->prepare("SELECT codigo,marca,tipo,carga,capacidad,ciclos,estado FROM baterias WHERE codigo=".$codigo);

      

       $stmt->execute();
      
       


   } catch(PDOException $e) {

   echo "Error: " . $e->getMessage();

   }

   return $stmt;



}



function modificar_bateria($codigo, $marca, $tipo, $carga, $ciclos, $estado){

   
   try {

      $codigo_bateria = "";
      $marca_bateria = "";
      $tipo_bateria = "";
      $carga_bateria = "";
      $ciclos_bateria = "";
      $estado_bateria = "";
      
      
      

        // preparar y vincular parámetros

        $stmt = $this->conexion->prepare("UPDATE baterias 
        SET codigo=:codigo,marca=:marca,tipo=:tipo,carga=:carga,ciclos=:ciclos,estado=:estado 
        WHERE codigo=:codigo");

         $stmt->bindParam(':codigo', $codigo_bateria);
         $stmt->bindParam(':marca', $marca_bateria);
         $stmt->bindParam(':tipo', $tipo_bateria);
         $stmt->bindParam(':carga', $carga_bateria);
         $stmt->bindParam(':ciclos', $ciclos_bateria);
         $stmt->bindParam(':estado', $estado_bateria);  
        
        // establecemos los parámetros y ejecutamos para insertar
         $codigo_bateria = $codigo;
         $marca_bateria = $marca;
         $tipo_bateria = $tipo;
         $carga_bateria = $carga;
         $ciclos_bateria = $ciclos;
         $estado_bateria = $estado;


        $stmt->execute();



 } catch(PDOException $e) {

        echo "Error: " . $e->getMessage();

 }

   
  

}


function borrar_bateria($codigo){



   try {

      $codigo_bateria="";

       // preparar y vincular parámetros

       $stmt = $this->conexion->prepare("DELETE FROM baterias WHERE codigo=:codigo");

       $stmt->bindParam(':codigo', $codigo_bateria);

      

       // establecemos los parámetros y ejecutamos para insertar

       $codigo_bateria = $codigo;

  

       $stmt->execute();

} catch(PDOException $e) {

       echo "Error: " . $e->getMessage();

}





  

}





}





?>
