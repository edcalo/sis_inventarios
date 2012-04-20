<?php
$datos = array();
foreach ($compras as $compra) {
    $compra['Compra']['id']=$compra['Compra']['id'];
    //$Compra['Compra']['save']=1;
    array_push($datos,$compra['Compra']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>