<?php
    $id = $_POST['id'];
    $params = array(
        "id" => $id,
    );
    //conexion al sw
    $client = new SoapClient("http://localhost:8080/ws/aerolinea.wsdl");

    try
    {
        $response = $client->__soapCall("DeleteReservation", array($params));
        print_r ($response->{'datos'});
    }
    catch (SoapFault $exception) 
    {
        echo $exception;      
    }
?>