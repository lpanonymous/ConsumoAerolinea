<?php
    $id_vuelo = $_POST['id_vuelo'];
    $nombre_cliente = $_POST['nombre_cliente'];
    $numero_tarjeta = $_POST['numero_tarjeta'];
    $fecha_vencimiento = $_POST['fecha_vencimiento'];
    $codigo_cvc = $_POST['codigo_cvc'];
    $cantidad = $_POST['cantidad'];
    $params = array(
        "id_vuelo" => $id_vuelo,
        "nombre_cliente" => $nombre_cliente,
        "num_tarjeta" => $numero_tarjeta,
        "fecha_vencimiento" => $fecha_vencimiento,
        "codigo_cvc" => $codigo_cvc,
        "cantidad" => $cantidad,
    );
    //conexion al sw
    $client = new SoapClient("http://localhost:8080/ws/aerolinea.wsdl");

    try
    {
        $response = $client->__soapCall("CreateFlightReservation", array($params));
        print_r ($response->{'datos'});
    }
    catch (SoapFault $exception) 
    {
        echo $exception;      
    }
?>