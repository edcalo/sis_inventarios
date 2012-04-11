<?php
$datos = array();
foreach ($grupos as $grupo) {
    array_push($datos, $grupo['Grupo']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
