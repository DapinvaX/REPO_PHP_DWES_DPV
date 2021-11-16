<?php

require ("baterias.php");
$bateria = new bateria();


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


  $bateria->modificar_bateria($codigo, $marca, $tipo, $carga, $ciclos, $estado);

  $html = '<tr>

  <td>'.$codigo.'</td>

  <td>'.$marca.'</td>

  <td>'.$tipo.'</td>
  
  <td>'.$carga.'</td>

  <td>'.$ciclos.'</td>

  <td>'.$estado.'</td>

  

  <td>'.'<a href="index.php?operacion=editar&nume='.$codigo.'" class="btn btn-info" role="button">Modificar</a>'.'</td>

  <td>'.'<a href="index.php?operacion=borrar&nume='.$codigo.'" class="btn btn-danger" role="button">Eliminar</a>'.'</td>

  </tr>';


    echo $html;
?>