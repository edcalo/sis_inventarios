<?php

if ($actualizado) {
    $lista_almacenes = array();
    foreach ($almacenes as $almacen) {
        array_push($lista_almacenes, $almacen['Almacen']);
    }
    $respuesta = array(
        'success' => $actualizado,        
        'data'=>$lista_almacenes
    );
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Almacen']
    );
}
echo json_encode($respuesta);
?>