<?php
$datos = array();
foreach ($clientes as $cliente) {
    $almacen['Cliente']['id']=$cliente['Cliente']['id'];
    //$almacen['Cliente']['save']=1;
    array_push($datos,$cliente['Cliente']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
