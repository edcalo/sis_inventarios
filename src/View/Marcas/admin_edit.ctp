<?php

if ($actualizado) {
    $lista_marcas = array();
    foreach ($marcas as $marca) {
        
        array_push($lista_marcas, $marca['Marca']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_marcas
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