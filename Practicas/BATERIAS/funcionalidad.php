<!doctype html>
<html lang="en">
  <head>
    <title>Información</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  


  <?php

   require ("baterias.php");

   $bateria = new bateria();


       

    if($_REQUEST["operacion"]=="modificar"){

         $bateria->modificar_bateria($_POST["codigo"],$_POST["marca"],$_POST["tipos"],$_POST["capacidad"],$_POST["ciclos"],$_POST["estado"]);
         mostrarListadoBaterias($bateria->listar_baterias(),-1);

       }

       else if ($_REQUEST["operacion"]=="borrar") {

       $bateria->borrar_bateria($_REQUEST["codigo"]);

       echo "<CENTER>La batería se ha borrado correctamente.</CENTER><P>";

       mostrarListadoBaterias($bateria->listar_baterias(),-1);

     }


   else // no hay operacion. Ejemplo: La primera vez que se entra

   {

     mostrarListadoBaterias($bateria->listar_baterias(),-1);

    

   }
   
  

   function mostrarListadoBaterias($baterias_array,$elemento){





     $html='<div class="container">
     <div class="row">
         <div class="col-md-12" style="text-align:center">
             <h2>Información del Pedido</h2>
         </div>
     </div>
     <div class="row">
         <div class="col-md-12" style="text-align:center">
             <table class="table table-bordered table-dark">
               <thead>
                 <tr>
                   <th scope="col">CODIGO</th>
                   <th scope="col">MARCA</th>
                   <th scope="col">TIPO</th>
                   <th scope="col">CAPACIDAD</th>
                   <th scope="col">CARGA</th>
                   <th scope="col">CICLOS</th>
                   <th scope="col">ESTADO</th>
                 </tr>
               </thead>
               <tbody>';

                
            if(isset( $_POST["inpCodigo"])){ 
                $codigo= $_POST["inpCodigo"];
            }else{
                echo "Error al intentar recuperar el campo 'codigo'";
            }
            
            if(isset( $_POST["marcaBaterias"])){ 
                $marca= $_POST["marcaBaterias"];
            }else {
                echo "Error al intentar recuperar campo 'marca'";
            }
            
            if(isset( $_POST["tiposBaterias"])){ 
                $tipos= $_POST["tiposBaterias"];
            }else{
                echo "Error al intentar recuperar el campo 'tipos'";
            }
            
            if(isset( $_POST["inpCapacidad"])){ 
                $capacidad= $_POST["inpCapacidad"];
            }else{
                echo "Error al intentar recuperar el campo 'capacidad'";
            }
            
            if(isset( $_POST["inpCarga"])){ 
                $carga= $_POST["inpCarga"];
            }else{
                echo "Error al intentar recuperar el campo 'carga'";
            }
            
            if(isset( $_POST["inpCiclos"])){ 
                $ciclos= $_POST["inpCiclos"];
            }else{
                echo "Error al intentar recuperar el campo 'ciclos'";
            }
            
            if(isset( $_POST["estadoBaterias"])){ 
                $estado= $_POST["estadoBaterias"];
            }else{
                echo "Error al intentar recuperar el campo 'estado'";
            }
            
          


               

    

         $fila="";

         foreach($baterias_array as $baterias){


           if($elemento != $baterias['id']){

             $fila='<tr codigo='.$baterias['codigo'].'>

             <td>'.$baterias['marca'].'</td>

             <td>'.$baterias['tipo'].'</td>

             <td>'.$baterias['capacidad'].'</td>

             <td>'.$baterias['carga'].'</td>

             <td>'.$baterias['ciclos'].'</td>

             <td>'.$baterias['estado'].'</td>
    

             <td>'.'<a href="index.php?operacion=editar&nume='.$baterias['id'].'" class="btn btn-warning" role="button">Modificar</a>'.'</td>

             <td>'.'<a href="index.php?operacion=borrar&nume='.$baterias['id'].'" class="btn btn-danger" role="button">Eliminar</a>'.'</td>

           </tr>';

           }else{

             $fila='<tr><form action="funcionalidad.php" method="post">
             <div class="row" style="margin-bottom:20">
                 <div class="col-md-12" style="text-align:center;margin-bottom:30">
                     <h1>BATERIAS</h1>
                 </div>
             </div>
             <div class="row" style=>
                 <div class="col-md-3" style="text-align:left;">
                    <label for="">CODIGO</label>
                 </div>
                 <div class="col-md-3" style="text-align:left;">
                    <input type="number" id="inpCodigo" name="inpCodigo" value="">
                 </div>
                 <div class="col-md-3">
                 
                 </div>
                 <div class="col-md-3">
                 
                 </div>
                 
             </div>
             <div class="row">
                 
                 <div class="col-md-3" style="text-align:left;">
                    <label for="marca">Marca:</label>
                 </div>
                 <div class="col-md-3" style="text-align:left;">
                       <select name="marcaBaterias">
                           <option value="YUASA" selected>Yuasa</option>
                           <option value="VARTA">Varta</option>
                           <option value="TUDOR">Tudor</option>
                       </select>
                 </div>
                 <div class="col-md-3" style="text-align:left;">
                    <label for="tipo">Tipo:</label>
                 </div>
                 <div class="col-md-3" style="text-align:left;">
                       <select name="tiposBaterias">
                         <option value="BATERÍA DE CELDAS HÚMEDAS" selected>BATERÍA DE CELDAS HÚMEDAS</option>
                         <option value="BATERÍA DE CALCIO" >BATERÍA DE CALCIO</option>
                         <option value="BATERÍA VRLA">BATERÍA VRLA</option>
                         <option value="BATERÍAS DE CICLO PROFUNDO">BATERÍAS DE CICLO PROFUNDO</option>
                         <option value="BATERÍA DE IONES DE LITIO">BATERÍA DE IONES DE LITIO</option>
                       </select>
                 </div>
             </div>
             <div class="row" style="text-align:left;">
   
               <div class="col-md-3">
                   <label for="">Carga</label>
               </div>
               <div class="col-md-3">
                   <input type="number" name="inpCarga" value="20">%
               </div>
               <div class="col-md-3">
                 
                 </div>
                 <div class="col-md-3">
                 
                 </div>
                 
             </div>
             <div class="row" style="text-align:left;">
   
               <div class="col-md-3">
                   <label for="">Capacidad</label>
               </div>
               <div class="col-md-3">
                   <input type="number" name="inpCapacidad" value="500">Ah
               </div>
               <div class="col-md-3">
                 
                 </div>
                 <div class="col-md-3">
                 
                 </div>
                 
             </div>
             <div class="row" style="text-align:left;">
   
               <div class="col-md-3">
                   <label for="">Ciclos de Vida</label>
               </div>
               <div class="col-md-3">
                   <input type="number" name="inpCiclos" value="5">
               </div>
               <div class="col-md-3">
                 
                 </div>
                 <div class="col-md-3">
                 
                 </div>
                 
             </div>
             <div class="row" style="text-align:left;">
   
               <div class="col-md-3">
                   <label for="">Estado</label>
               </div>
               <div class="col-md-3">
                       <select name="estadoBaterias">
                         <option value="CARGADA" selected>CARGADA</option>
                         <option value="EN USO" >EN USO</option>
                         <option value="DESCARGADA">DESCARGADA</option>
                         <option value="EN REPARACIÓN">REPARACIÓN</option>
                       </select>
               </div>
               <div class="col-md-3">
                 
                 </div>
                 <div class="col-md-3">
                 
                 </div>
             </div>
             <div class="row">
                 <div class="col-md-6" style="text-align:left">
                   <button type="submit" class="btn btn-primary">Añadir</button>
                 </div>
                 <div class="col-md-6" style="text-align:left">
                    <!-- <input type="button" name="" value=""> -->
                 </div>
             </div>
   
           </form>

           </tr>';

           }

          

            $html=$html.$fila;

          } //fin del bucle for 

          $html=$html.'</tbody>

                       </table>

                       <div id="informacion">
                       
                       </div>

                     </div>
                     <div class="row">
        	
                     <div class="col-md-6" style="text-align: left">
                         
                         <input name="expCSV" id="btnExpCSV" class="btn btn-dark" type="button" onclick="importarCSV();" value="Exportar a CSV">
                         
                     </div>
                     <div class="col-md-6"></div>
                     
                 </div>
             </div>';

          echo $html;

      }



 

   ?>

                    
       


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>