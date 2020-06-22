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
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Mostrar vuelo</a>
</nav>

<?php
    $id = $_GET['id'];
        $response = file_get_contents("http://localhost:8080/buscar-vuelo/?id={$id}");
        $response = json_decode($response, true);
        echo "<div class='row' >
        <div class='col-sm-12'>
        <div class='card text-white bg-dark mb-6' style='opacity:0.9'>
        <div class='card-header'>Vuelo</div>
        <div class='card-body'>
        <form action='../controllers/createflight.php' method='post'>

        <div class='form-row'>
          <div class='form-row'>
            <div class='form-group col-md-2'>
              <label for='inputCity'>Aerolinea</label>
              <input type='text' class='form-control' id='inputCity' placeholder='{$response['aerolinea']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Codigo de avion</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['codigo_avion']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Fecha de salida</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['fecha_salida']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Hora de salida</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['hora_salida']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Hora de llegada</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['hora_llegada']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>País origen</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['pais_origen']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Pais destino</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['pais_destino']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Ciudad origen</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['ciudad_origen']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Ciudad destino</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['ciudad_destino']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Precio tarifa basica</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['precio_tarifa_basica']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Precio tarifa clasica</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['precio_tarifa_clasica']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Precio tarifa amplus</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['precio_tarifa_amplus']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Precio tarifa flexible</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['precio_tarifa_flexible']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Precio tarifa premier</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['precio_tarifa_premier']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Beneficios tarifa basica</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['beneficios_tarifa_basica']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Beneficios tarifa clasica</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['beneficios_tarifa_clasica']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Beneficios tarifa amplus</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['beneficios_tarifa_amplus']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Beneficios tarifa flexible</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['beneficios_tarifa_flexible']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Beneficios tarifa premier.............</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['beneficios_tarifa_premier']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Número de asientos tarifa basica</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['num_asientos_tarifa_basica']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Número de asientos tarifa clasica</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['num_asientos_tarifa_clasica']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Número de asientos tarifa amplus</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['num_asientos_tarifa_amplus']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Número de asientos tarifa flexible</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['num_asientos_tarifa_flexible']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Número de asientos tarifa premier</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['num_asientos_tarifa_premier']}' disabled>
            </div>
          </div>
          
        </form>
        </div>
        </div>
        </div>
        </div>";
?>
</body>
</html>