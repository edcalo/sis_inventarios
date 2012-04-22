<?php
switch ($guardado) {
    case 1: {            
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => 'Compra guardado',
                    'msg' => 'Compra guardado con exito en el catalogo del sistema'
                ),
                'data' => array(
                    'id' => $newID, 
                    'credito_id' => $this->data['Compra']['credito_id'], 
                    'proveedor_id' =>$this->data['Compra']['proveedor_id'], 
                    'empleado_id' => $this->data['Compra']['empleado_id'],
                    'fecha_compra' => $this->data['Compra']['fecha_compra'],
                    'monto_total' => $this->data['Compra']['monto_total']
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
                'errors' => $this->validationErrors['Compra']
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