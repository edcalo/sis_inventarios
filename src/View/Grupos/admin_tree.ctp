<?php

$datos = array();
foreach ($grupos as $grupo) {
    array_push($datos, array(
        'id' => $grupo['Grupo']['id'],
        'text' => $grupo['Grupo']['nombre_grupo'],
        'leaf' => $grupo['Grupo']['childs'] == 0,
        'iconCls' => ''
    ));
}

echo json_encode($datos);
?>
