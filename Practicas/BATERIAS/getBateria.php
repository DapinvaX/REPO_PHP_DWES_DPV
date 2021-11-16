<?php 

require ("baterias.php");
    $bateria = new bateria();


   if(isset($_GET["codigo"])){
    $codigoPaciente = $_GET["codigo"];
    
   }

   $resultado = $bateria->obtener_bateria_por_codigo($codigoPaciente);

   $html = "";
   foreach($resultado as $datosBateria){
      
        $html .= 
        "<table class='table table-striped table-inverse table-responsive'>
            <thead class='thead-inverse'>
                <tr>
                <th scope='col'>CODIGO</th>
                <th scope='col'>MARCA</th>
                <th scope='col'>TIPO</th>
                <th scope='col'>CAPACIDAD</th>
                <th scope='col'>CARGA</th>
                <th scope='col'>CICLOS</th>
                <th scope='col'>ESTADO</th>
                </tr>
                </thead>
                <tbody >
                    <tr>
                        <td scope='row'>
                        ".$datosBateria['codigo']."
                        </td>
                        <td>
                        ".$datosBateria['marca']."
                        </td>
                        <td>
                        ".$datosBateria['tipo']."
                        </td>
                        <td>
                        ".$datosBateria['capacidad']."
                        </td>
                        <td>
                        ".$datosBateria['carga']."
                        </td>
                        <td>
                        ".$datosBateria['ciclos']."
                        </td>
                        <td>
                        ".$datosBateria['estado']."
                        </td>
                    </tr>
            </tbody>
    </table>";
   }

   //echo "EXISTE LA BATERIA CON codigo:".$codigo_Paciente;
   echo $html;

?>