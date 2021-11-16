<?php
    //1º Definición del nombre del archivo

    $archivo= "claves.txt";
    
    
    
     //Buscando el archivo
//2º Verificar si el archivo existe
 if (file_exists($archivo)){
     //Verificar si el archivo contiene algo
    if(filesize($archivo)>0){
        //3º Abrirlo con fopen("archivoaabrir.txt", w+); //Como abrir el archivo en formato lectura o escritura
        $abrir = fopen($archivo,"r+");

        echo "Archivo existe..!!";
    }else{
        echo "El archivo está vacío";
    }
    

}else{    
        echo "Archivo no encontrado";

}

?>

<!doctype html>
<html lang="en">
  <head>
    <title>BATERIAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="container">
         <form action="funcionalidad.php" method="post">
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
                 <input type="number" id="inpCodigo" name="inpCodigo" min="10000000" max="99999999">
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
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>