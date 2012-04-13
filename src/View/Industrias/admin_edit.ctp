<?php

if ($actualizado) {
    $lista_industrias = array();
    foreach ($industrias as $industria) {
        array_push($lista_industrias, $industria['Industria']);
    }
    $respuesta = array(
        'success' => $actualizado,        
        'data'=>$lista_industrias
    );
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Industria']
    );
}
echo json_encode($respuesta);
?>