<?php
$datos = array();
foreach ($roles as $rol) {
    array_push($datos, $rol['Rol']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
