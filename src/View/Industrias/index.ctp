<?php
$datos = array();
foreach ($industrias as $industria) {
    $industria['Industria']['id']=$industria['Industria']['id'];
    //$industria['Industria']['save']=1;
    array_push($datos,$industria['Industria']);
}
$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>
