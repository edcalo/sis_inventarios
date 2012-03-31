<?php

if($actualizado) {
    
    $lista_roles = array();
    foreach ($roles as $rol) {
        
        array_push($lista_roles, $rol['Rol']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_roles
    );
}else {
    $respuesta = array(
        'success'=> $actualizado,
        'mensage'=> array(
            'titulo'=> 'Error al guardar',
            'msg'=> 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Rol']
    );
}
echo json_encode($respuesta);
?>