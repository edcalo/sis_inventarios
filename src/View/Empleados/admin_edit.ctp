<?php

if($actualizado) {
    
    $lista_empleados = array();
    foreach ($empleados as $empleado) {
       // $empleado['Empleado']['id']=$empleado['Empleado']['id'];
       // unset($empleado['Empleado']['id']);
        array_push($lista_empleados, $empleado['Empleado']);
    }
    $respuesta = array(
        'success' => $actualizado,
        'data'=>$lista_empleados
    );
}else {
    $respuesta = array(
        'success'=> $actualizado,
        'mensage'=> array(
            'titulo'=> 'Error al guardar',
            'msg'=> 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
        ),
        'errors' => $this->validationErrors['Empleado']
    );
}
echo json_encode($respuesta);
?>