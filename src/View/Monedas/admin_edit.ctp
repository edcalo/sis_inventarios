<?php

if ($actualizado) {
    $lista_monedas = array();
    foreach ($monedas as $moneda) {
        
        array_push($lista_monedas, $moneda['Moneda']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_monedas
    );
    
} else {
    $respuesta = array(
        'success' => $actualizado,
        'mensage' => array(
            'titulo' => 'Error al guardar',
            'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Moneda']
    );
}
echo json_encode($respuesta);
?>