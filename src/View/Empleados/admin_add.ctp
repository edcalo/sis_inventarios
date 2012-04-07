<?php
switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Empleado registrado', true),
                    'msg' => __('El nuevo Empleado fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array('id'=>$newID, 'nombres'=>$this->data['Empleado']['nombres'],
                                              'doc_identidad'=>$this->data['Empleado']['doc_identidad'],
                                              'apellido_paterno'=>$this->data['Empleado']['doc_identidad'],
                                              'apellido_materno'=>$this->data['Empleado']['apellido_materno'],
                                             // 'fecha_ingreso'=>$this->data['Empleado']['fecha_ingreso'],
                                              'contacto'=>$this->data['Empleado']['contacto'],
                                              'telefono'=>$this->data['Empleado']['telefono'],
                                              'email'=>$this->data['Empleado']['email'],
                                              'tipo_doc_identidad'=>$this->data['Empleado']['tipo_doc_identidad'])
            );
            print json_encode($respuesta);
        } break;
    case 0: {

            $resultado = array(
                'success' => false,
                'mensage' => array(
                    'titulo' => __('Error al guardar', true),
                    'msg' => __('El formulario tiene errores, corrijalos y vuelva ha intentarlo', true)
                ),
                'errors' => $this->validationErrors['Empleado']
            );
            print json_encode($resultado);
        } break;
    case 2:
        $resultado = array(
            'success' => false,
            'mensage' => array(
                'titulo' => __('Error al guardar', true),
                'msg' => __('NO se recibio datos para registrar', true)
            ),
            'errors' => array()
        );
        print json_encode($resultado);
        break;
}
?>