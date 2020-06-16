<?php
    $id = $_POST['id'];
    $aerolinea = $_POST['aerolinea'];
    $codigo_avion = $_POST['codigo_avion'];
    $fecha_salida = $_POST['fecha_salida'];
    $hora_salida = $_POST['hora_salida'];
    $hora_llegada = $_POST['hora_llegada'];
    $pais_origen = $_POST['pais_origen'];
    $pais_destino = $_POST['pais_destino'];
    $ciudad_origen = $_POST['ciudad_origen'];
    $ciudad_destino = $_POST['ciudad_destino'];
    $precio_tb = $_POST['precio_tb'];
    $precio_tc = $_POST['precio_tc'];
    $precio_tamplus = $_POST['precio_tamplus'];
    $precio_tf = $_POST['precio_tf'];
    $precio_tp = $_POST['precio_tp'];
    $beneficios_tb = $_POST['beneficios_tb'];
    $beneficios_tc = $_POST['beneficios_tc'];
    $beneficios_tamplus = $_POST['beneficios_tamplus'];
    $beneficios_tf = $_POST['beneficios_tf'];
    $beneficios_tp = $_POST['beneficios_tp'];
    $numero_atb = $_POST['numero_atb'];
    $numero_atc = $_POST['numero_atc'];
    $numero_atamplus = $_POST['numero_atamplus'];
    $numero_atf = $_POST['numero_atf'];
    $numero_atp = $_POST['numero_atp'];

    $params = array(
        "id" => $id,
        "aerolinea" => $aerolinea,
        "codigo_avion" => $codigo_avion,
        "fecha_salida" => $fecha_salida,
        "hora_salida" => $hora_salida,
        "hora_llegada" => $hora_llegada,
        "pais_origen" => $pais_origen,
        "pais_destino" => $pais_destino,
        "ciudad_origen" => $ciudad_origen,
        "ciudad_destino" => $ciudad_destino,
        "precio_tarifa_basica" => $precio_tb,
        "precio_tarifa_clasica" => $precio_tc,
        "precio_tarifa_amplus" => $precio_tamplus,
        "precio_tarifa_flexible" => $precio_tf,
        "precio_tarifa_premier" => $precio_tp,
        "beneficios_tarifa_basica" => $beneficios_tb,
        "beneficios_tarifa_clasica" => $beneficios_tc,
        "beneficios_tarifa_amplus" => $beneficios_tamplus,
        "beneficios_tarifa_flexible" => $beneficios_tf,
        "beneficios_tarifa_premier" => $beneficios_tp,
        "num_asientos_tarifa_basica" => $numero_atb,
        "num_asientos_tarifa_clasica" => $numero_atc,
        "num_asientos_tarifa_amplus" => $numero_atamplus,
        "num_asientos_tarifa_flexible" => $numero_atf,
        "num_asientos_tarifa_premier" => $numero_atp,
    );
    //conexion al sw
    $client = new SoapClient("http://localhost:8080/ws/aerolinea.wsdl");

    try
    {
        $response = $client->__soapCall("UpdateFlight", array($params));
        print_r ($response->{'datos'});
    }
    catch (SoapFault $exception) 
    {
        echo $exception;      
    }
?>