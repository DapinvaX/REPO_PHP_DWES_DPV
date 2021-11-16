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
      
    <div class="container">
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
                  <tbody>
                  <?php 
                  
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
                  
                
                  
                  
                  ?>
                    <tr>
                      <td><?php
                       echo $codigo;
                       ?></td>
                       <td><?php
                        echo $marca;
                       ?></td>
                        <td><?php
                       echo $tipos;
                       ?></td>
                        <td><?php
                        echo $capacidad;
                       ?></td>
                        <td><?php
                        echo  $carga;
                       ?></td>
                        <td><?php
                        echo  $ciclos;
                       ?></td>
                       <td><?php
                        echo $estado;
                       ?></td>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="row">
        	
        	<div class="col-md-4" style="text-align: left">
        		
        		<input name="expCSV" id="btnExpCSV" class="btn btn-dark" type="button" onclick="exportarCSV();" value="Exportar a CSV">
        		
        	</div>
        	<div class="col-md-6" style="text-align: left; margin-top: 4px">
        	   
             <input type="file" name="fichero" size="200">&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" name="leerCSV" id="btnLeerCSV" class="btn btn-dark" 
             onclick="" value="Leer CSV">
          </div>
          <div class="col-md-6" style="text-align: left; margin-top: 4px">
            
          </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>