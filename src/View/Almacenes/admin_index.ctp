<?php
$datos = array();
foreach ($almacenes as $almacen) {
    $almacen['Almacen']['id']=$almacen['Almacen']['id'];
    //$almacen['Almacen']['save']=1;
    array_push($datos,$almacen['Almacen']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
