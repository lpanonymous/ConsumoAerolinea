<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="../resources/icon.png">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Aerolina</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
            <a class="nav-link" href="crearvuelorest.php">Crear vuelo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buscarvuelorest.php">Buscar vuelo <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="actualizarvuelorest.php">Actualizar vuelo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eliminarvuelorest.php">Eliminar vuelo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mostrarvuelosrest.php">Mostrar vuelos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="crearreservacionrest.php">Crear reservación<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buscarreservacionrest.php">Buscar reservación<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="actualizarreservacionrest.php">Actualizar reservación<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eliminarreservacionrest.php">Eliminar reservacion<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mostrarreservacionesrest.php">Mostrar reservaciones<span class="sr-only">(current)</span></a>
          </li>
    </ul>
  </div>
</nav>

<div class="row" >
        <div class="col-sm-12">
        <div class="card text-white bg-dark mb-6" style="opacity:0.9">
        <div class="card-header">Registrar vuelo</div>
        <div class="card-body">
        <form action="http://localhost:8080/crear-vuelo" method="post">

        <div class="form-row">
          <div class="form-row">
            <div class="form-group col-md-2">
              <label for="inputCity">Aerolinea</label>
              <input type="text" class="form-control" id="inputCity" name="aerolinea">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Codigo de avion</label>
              <input type="text" class="form-control" id="inputZip" name="codigo_avion">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Fecha de salida</label>
              <input type="date" class="form-control" id="inputZip" name="fecha_salida">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Hora de salida</label>
              <input type="text" class="form-control" id="inputZip" name="hora_salida">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Hora de llegada</label>
              <input type="text" class="form-control" id="inputZip" name="hora_llegada">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">País origen</label>
              <input type="text" class="form-control" id="inputZip" name="pais_origen">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Pais destino</label>
              <input type="text" class="form-control" id="inputZip" name="pais_destino">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Ciudad origen</label>
              <input type="text" class="form-control" id="inputZip" name="ciudad_origen">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Ciudad destino</label>
              <input type="text" class="form-control" id="inputZip" name="ciudad_destino">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Precio tarifa basica</label>
              <input type="number" class="form-control" id="inputZip" name="precio_tb">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Precio tarifa clasica</label>
              <input type="number" class="form-control" id="inputZip" name="precio_tc">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Precio tarifa amplus</label>
              <input type="number" class="form-control" id="inputZip" name="precio_tamplus">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Precio tarifa flexible</label>
              <input type="number" class="form-control" id="inputZip" name="precio_tf">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Precio tarifa premier</label>
              <input type="number" class="form-control" id="inputZip" name="precio_tp">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Beneficios tarifa basica</label>
              <input type="text" class="form-control" id="inputZip" name="beneficios_tb">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Beneficios tarifa clasica</label>
              <input type="text" class="form-control" id="inputZip" name="beneficios_tc">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Beneficios tarifa amplus</label>
              <input type="text" class="form-control" id="inputZip" name="beneficios_tamplus">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Beneficios tarifa flexible</label>
              <input type="text" class="form-control" id="inputZip" name="beneficios_tf">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Beneficios tarifa premier.............</label>
              <input type="text" class="form-control" id="inputZip" name="beneficios_tp">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Número de asientos tarifa basica</label>
              <input type="number" class="form-control" id="inputZip" name="numero_atb">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Número de asientos tarifa clasica</label>
              <input type="number" class="form-control" id="inputZip" name="numero_atc">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Número de asientos tarifa amplus</label>
              <input type="number" class="form-control" id="inputZip" name="numero_atamplus">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Número de asientos tarifa flexible</label>
              <input type="number" class="form-control" id="inputZip" name="numero_atf">
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Número de asientos tarifa premier</label>
              <input type="number" class="form-control" id="inputZip" name="numero_atp">
            </div>
            
            <button type="submit" class="btn btn-primary">Guardar</button>
          
          </div>
          
        </form>
        </div>
        </div>
        </div>
        </div>

</body>
</html>