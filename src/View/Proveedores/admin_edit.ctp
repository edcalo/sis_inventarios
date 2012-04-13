<?php

if ($actualizado) {

    $lista_proveedores = array();
    foreach ($proveedores as $proveedor) {

        array_push($lista_proveedores, $proveedor['Proveedor']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data' => $lista_proveedores
    );
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Proveedor']
    );
}
echo json_encode($respuesta);
?>