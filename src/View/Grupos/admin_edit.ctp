<?php

if($actualizado) {

    $lista_grupos = array();
    foreach ($grupos as $grupo) {

        array_push($lista_grupos, $grupo['Grupo']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_grupos
    );
}else {
    $respuesta = array(
        'success'=> $actualizado,
        'mensage'=> array(
            'titulo'=> 'Error al guardar',
            'msg'=> 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Grupo']
    );
}
echo json_encode($respuesta);
?>