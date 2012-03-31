<?php
    $respuesta = array(
        'success'=> true,
        'total'=> count($datos),
        'data'=> $datos
    );
    echo json_encode($respuesta);
?>