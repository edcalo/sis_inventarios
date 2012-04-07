<?php
$datos = array();
foreach ($empleados as $empleado) {
    array_push($datos, $empleado['Empleado']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
