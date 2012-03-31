<?php

if ($actualizado) {
    $respuesta = array(
        'success' => $actualizado,
        /*'data' => array(
            'nombre_marca' => $this->data['Marca']['nombre_marca'],
            'descripcion_marca' => $this->data['Marca']['descripcion_marca']
        )*/
    );
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Marca']
    );
}
echo json_encode($respuesta);
?>