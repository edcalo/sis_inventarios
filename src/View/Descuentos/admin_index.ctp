<?php
$datos = array();
foreach ($descuentos as $descuento) {
    array_push($datos, $descuento['Descuento']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
