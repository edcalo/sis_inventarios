<?php
$datos = array();
foreach ($proveedores as $proveedor) {
    array_push($datos, $proveedor['Proveedor']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
