<?php
$datos = array();
foreach ($monedas as $moneda) {
    array_push($datos, $moneda['Moneda']);
}
    $respuesta = array(
        'success'=> true,
        'total'=> count($datos),
        'data'=> $datos
    );
    echo json_encode($respuesta);
?>