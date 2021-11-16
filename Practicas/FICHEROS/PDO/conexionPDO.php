<?php 



define("SERVIDOR", "localhost");

define("USUARIO", "root");

define("CLAVE", "");


obtenerConexionBD();


function obtenerConexionBD($BD='HospitalPDO')

   {

       /* Intentamos establecer una conexión con el servidor.*/

       try {

           if ($BD==''){

               $conexion = new PDO("mysql:host=".SERVIDOR.";charset=utf8", USUARIO, CLAVE);

           }

           else{

               $conexion  = new PDO("mysql:host=" . SERVIDOR . ";dbname=" . $BD.";charset=utf8", USUARIO, CLAVE);

           }

           /* Establecemos atributos para configurar la conexión PDO*/

           $conexion ->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);

           $conexion ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

           echo "<p>Conexión realizada <b>(PDO)</b>";
           
           echo'<script type="text/javascript">
                    
                    alert("Conexión (PDO) realizada con éxito");
                    window.location.href="conexionPDO.php";
                
                    </script>';

          

           


           return($conexion );

       } catch (PDOException $e) {

           die ("<p><H3>No se ha podido establecer la conexión (PDO).

                 <p>Compruebe si está activado el servidor de bases de datos MySQL.</H3></p>\n <p>Error: ". $e->getMessage()."</p>\n"
                
                 
                
                );

           exit();

       } // end try

   }

?>