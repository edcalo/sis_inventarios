<?php
$datos = array();
foreach ($dosificaciones as $dosificacion) {
    array_push($datos, $dosificacion['Dosificacion']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
