<?php

if ($actualizado) {
    $lista_items = array();
    foreach ($items as $item) {
        array_push($lista_items, $item['Item']);
    }
    $respuesta = array(
        'success' => $actualizado,        
        'data'=>$lista_items
    );
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Item']
    );
}
echo json_encode($respuesta);
?>