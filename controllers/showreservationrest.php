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
      <a class="navbar-brand" href="#">Mostrar reservación</a>
</nav>

<?php
    $id = $_POST['id'];
    $response = file_get_contents("http://localhost:8080/buscar-reservacion/?id={$id}");    
    $response = json_decode($response, true);
        echo "<div class='row' >
        <div class='col-sm-12'>
        <div class='card text-white bg-dark mb-6' style='opacity:0.9'>
        <div class='card-header'>Reservación</div>
        <div class='card-body'>
        <form action='../controllers/createflight.php' method='post'>

        <div class='form-row'>
          <div class='form-row'>
            <div class='form-group col-md-2'>
              <label for='inputCity'>Id de la reservación</label>
              <input type='number' class='form-control' id='inputCity' placeholder='{$response['id']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Id del vuelo</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['id_vuelo']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Nombre del cliente</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['nombre_cliente']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Número de tarjeta</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['numero_tarjeta']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Fecha de vencimiento</label>
              <input type='text' class='form-control' id='inputZip' placeholder='{$response['fecha_vencimiento']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Codigo cvc</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['codigo_cvc']}' disabled>
            </div>
            <div class='form-group col-md-2'>
              <label for='inputZip'>Cantidad</label>
              <input type='number' class='form-control' id='inputZip' placeholder='{$response['cantidad']}' disabled>
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