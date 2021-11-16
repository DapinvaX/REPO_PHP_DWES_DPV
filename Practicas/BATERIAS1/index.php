<!doctype html>
<html lang="es">
  <head>
    <title>BATERIAS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <form action="funciones.php" method="POST">
          <div class="container">

            <div class="row">
                
                <div class="col-md-3">
                    <label for="">TIPO</label>
                </div>

                <div class="col-md-9">

                    <select name="tiposBaterias">
                        <option value="bCeldasHumedas" selected>BATERÍA DE CELDAS HÚMEDAS</option>
                        <option value="bCalcio" >BATERÍA DE CALCIO</option>
                        <option value="bVRLA">BATERÍA VRLA</option>
                        <option value="bCicloProfundo">BATERÍAS DE CICLO PROFUNDO</option>
                        <option value="bIonesLitio">BATERÍA DE IONES DE LITIO</option>
                    </select>

                </div>

            </div>

            <div class="row">

                <div class="col-md-2">
                    <label for="">Marca</label>
                </div>
                <div class="col-md-2">
                    
                </div>

                <div class="col-md-2">
                    <label for="">Modelo</label>
                </div>
                <div class="col-md-2">

                </div>
                
            </div>

            <div class="row">

                <div class="col-md-6">
                    <label for="">Carga</label>
                </div>

                <div class="col-md-6">
                    <input type="number" name="porcentageCarga" value="">%
                </div>
                
            </div>
              
          </div>
          
      </form>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>