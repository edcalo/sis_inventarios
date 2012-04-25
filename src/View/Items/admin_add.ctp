<?php
switch ($guardado) {
    case 1: {            
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => 'Item guardado',
                    'msg' => 'Item guardado con exito en el catalogo del sistema'
                ),
                'data' => array(
                    'id' => $newID, 
                    'grupo_id' => $this->data['Item']['grupo_id'], 
                    'industria_id' =>$this->data['Item']['industria_id'], 
                    'almacen_id' => $this->data['Item']['almacen_id'],
                    'nombre_articulo' => $this->data['Item']['nombre_articulo'],
                    'descripcion' => $this->data['Item']['descripcion'],
                    'numero_de_serie' => $this->data['Item']['numero_de_serie'],
                    'codigo' => $this->data['Item']['codigo'],
                    'precio_compra' => $this->data['Item']['precio_compra'],
                    'precio_referencia_venta' => $this->data['Item']['precio_referencia_venta'],
                    'garantia' => $this->data['Item']['garantia'],
                    'compra_id' => $this->data['Item']['compra_id']
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
                'errors' => $this->validationErrors['Item']
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