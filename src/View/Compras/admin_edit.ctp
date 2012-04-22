<?php

if ($actualizado) {
    $lista_compras = array();
    foreach ($compras as $compra) {
        array_push($lista_compras, $compra['Compra']);
    }
    $respuesta = array(
        'success' => $actualizado,        
        'data'=>$lista_compras
    );
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Compra']
    );
}
echo json_encode($respuesta);
?>