<?php

if ($actualizado) {
    $lista_clientes = array();
    foreach ($clientes as $cliente) {
        array_push($lista_clientes, $cliente['Cliente']);
    }
    $respuesta = array(
        'success' => $actualizado,        
        'data'=>$lista_clientes
    );
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Cliente']
    );
}
echo json_encode($respuesta);
?>