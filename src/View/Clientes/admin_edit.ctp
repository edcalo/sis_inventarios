<?php

if ($actualizado) {
    $respuesta = array(
        'success' => $actualizado,        
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