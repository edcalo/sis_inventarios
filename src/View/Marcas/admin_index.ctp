<?php
$datos = array();
foreach ($marcas as $marca) {
    array_push($datos, $marca['Marca']);
}
    $respuesta = array(
        'success'=> true,
        'total'=> count($datos),
        'data'=> $datos
    );
    echo json_encode($respuesta);
?>