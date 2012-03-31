<?php

switch ($guardado) {
    case 1: {            
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => 'Industria guardado',
                    'msg' => 'Industria guardado con exito en el catalogo del sistema'
                ),
                'data' => array(
                    'id' => $newID, 
                    'nombre_industria' => $this->data['Industria']['nombre_industria'], 
                    'descripcion_industria' => $this->data['Industria']['descripcion_industria']
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
                'errors' => $this->validationErrors['Industria']
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