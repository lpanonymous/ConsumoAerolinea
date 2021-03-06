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
    <li class="nav-item">
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
          <li class="nav-item active">
            <a class="nav-link" href="mostrarreservacionesrest.php">Mostrar reservaciones<span class="sr-only">(current)</span></a>
          </li>
    </ul>
  </div>
</nav>
<?php
      $response = file_get_contents("http://localhost:8080/mostrar-reservaciones");
      $response = json_decode($response);
      print "<div id='table' class='table-responsive-sm'>";
      print "<table class='table table-dark' border='1' style='width:auto; height:20px; position: absolute;
      left: 12.5%;
      top: 30%; opacity:0.9;
      '>";
      print "<thead>
      <tr align='center'>
        <th scope='col'>Id de reservación</th>
        <th scope='col'>Id de vuelo</th>
        <th scope='col'>Nombre del cliente</th>
        <th scope='col'>Número de tarjeta</th>
        <th scope='col'>Fecha de vencimiento</th>
        <th scope='col'>Código cvc</th>
        <th scope='col'>Cantidad</th>
      </tr>
    </thead>";
     print "<tbody>";
      foreach($response as $key => $value)
      {
          print "<tr><td>". $value->{'id'} . 
          "</td><td>" . $value->{'id_vuelo'} . 
          "</td><td>" . $value->{'nombre_cliente'} . 
          "</td><td>" . $value->{'numero_tarjeta'} . 
          "</td><td>" . $value->{'fecha_vencimiento'} .
          "</td><td>" . $value->{'codigo_cvc'} .
          "</td><td>" . $value->{'cantidad'} . 
          "</tr></td>";
      }
      print "</tbody>";
      print "</table>";
      print "</div>";
?>

</body>
</html>