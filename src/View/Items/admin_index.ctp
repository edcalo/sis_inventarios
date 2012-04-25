<?php
$datos = array();
foreach ($items as $item) {    
    array_push($datos,$item['Item']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>