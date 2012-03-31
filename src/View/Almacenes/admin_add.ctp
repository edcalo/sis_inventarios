<?php

switch ($guardado) {
    case 1: {            
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => 'Almacen guardado',
                    'msg' => 'Almacen guardado con exito en el catalogo del sistema'
                ),
                'data' => array(
                    'id' => $newID, 
                    'nombre_almacen' => $this->data['Almacen']['nombre_almacen'], 
                    'direccion_almacen' =>$this->data['Almacen']['direccion_almacen'], 
                    'descripcion_almacen' => $this->data['Almacen']['descripcion_almacen']
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
                'errors' => $this->validationErrors['Almacen']
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