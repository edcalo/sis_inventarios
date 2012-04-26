<?php

$datos = array();
//print_r($items);
foreach ($items as $item) {
    //$item['Item']['id']=1;
    //$item['Grupo']['id'] = $item['Grupo']['nombre_grupo'];    
    $arr = array(
        'id' => $item['Item']['id'],
        'marca_id' => $item['Item']['marca_id'],
        'grupo_id' => $item['Item']['grupo_id'],
        'industria_id' => $item['Item']['industria_id'],
        'almacen_id' => $item['Item']['almacen_id'],
        'nombre_articulo' => $item['Item']['nombre_articulo'],
        'descripcion' => $item['Item']['descripcion'],
        'numero_de_serie' => $item['Item']['numero_de_serie'],
        'codigo' => $item['Item']['codigo'],
        'precio_compra' => $item['Item']['precio_compra'],
        'precio_referencia_venta' => $item['Item']['precio_referencia_venta'],
        'garantia_compra' => $item['Item']['garantia_compra'],
        'compra_id' => $item['Item']['compra_id'],
        'nombre_grupo'=>$item['Grupo']['nombre_grupo']
    );
    array_push($datos, $arr);
}

$respuesta = array(
    'success' => true,
    'total' => count($datos),
    'data' => $datos
);
echo json_encode($respuesta);
?>