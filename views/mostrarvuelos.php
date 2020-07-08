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
      <a class="navbar-brand" href="../index.php">Aerolina</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="crearvuelo.php">Crear vuelo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buscarvuelo.php">Buscar vuelo <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="actualizarvuelo.php">Actualizar vuelo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eliminarvuelo.php">Eliminar vuelo<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="mostrarvuelos.php">Mostrar vuelos<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="crearreservacion.php">Crear reservación<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="buscarreservacion.php">Buscar reservación<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="actualizarreservacion.php">Actualizar reservación<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="eliminarreservacion.php">Eliminar reservacion<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mostrarreservaciones.php">Mostrar reservaciones<span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
</nav>
<?php
    $client = new SoapClient("http://localhost:8080/ws/aerolinea.wsdl");

    try
    {
      $response = $client->__soapCall("DisplayAllFlight", array());
      $respuesta = array_values($response->{'datos'});
      print "<div id='table' class='table-responsive-sm'>";
      print "<table class='table table-dark' border='1' style='width:auto; height:20px; position: absolute;
      left: 12.5%;
      top: 30%; opacity:0.9;
      '>";
      print "<thead>
      <tr align='center'>
        <th scope='col'>Id</th>
        <th scope='col'>Hora de salida</th>
        <th scope='col'>Hora de llegada</th>
        <th scope='col'>Ciudad origen </th>
        <th scope='col'>Ciudad destino </th>
      </tr>
    </thead>";
     print "<tbody>";
      foreach($respuesta as $key => $value)
      {
          print "<tr><td>". $value->{'id'} . 
          "</td><td>" . $value->{'hora_salida'} . 
          "</td><td>" . $value->{'hora_llegada'} . 
          "</td><td>" . $value->{'ciudad_origen'} . 
          "</td><td>" . $value->{'ciudad_destino'} . 
          "</tr></td>";
      }
      print "</tbody>";
      print "</table>";
      print "</div>";
    }
    catch (SoapFault $exception) 
    {
        echo $exception;      
    }
?>



</body>
</html>