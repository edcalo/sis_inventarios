<?php

switch ($guardado) {
    case 1: {            
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => 'Cliente guardado',
                    'msg' => 'Cliente guardado con exito en el catalogo del sistema'
                ),
                'data' => array(
                    'id' => $newID, 
                    'nit_ci'=>$this->data['Cliente']['nit_ci'],
                    'nombres' => $this->data['Cliente']['nombres'], 
                    'apellido_paterno' =>$this->data['Cliente']['apellido_paterno'], 
                    'apellido_materno' => $this->data['Cliente']['apellido_materno'],
                    'telefono' => $this->data['Cliente']['telefono'],
                    'email' => $this->data['Cliente']['email'],
                )
            );
            print json_encode($respuesta);
        } break;
    case 0: {

            $resultado = array(
                'success' => false,
                'mensage' => array(
                    'titulo' => 'Error al guardar',
                    'msg' => 'El formulario tiene errores, corrijalos y vuelva ha intentarlo'
                ),
                'errors' => $this->validationErrors['Cliente']
            );
            print json_encode($resultado);
        } break;
    case 2: {
            $resultado = array(
                'success' => false,
                'mensage' => array(
                    'titulo' => 'Error al guardar',
                    'msg' => 'NO se recibio datos para registrar el servidor'
                ),
                'errors' => array()
            );
            print json_encode($resultado);
        }break;
}
?>