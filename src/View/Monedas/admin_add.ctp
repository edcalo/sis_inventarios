<?php

switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Moneda registrado', true),
                    'msg' => __('El nuevo Moneda fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id' => $newID, 
                    'nombre_moneda' => $this->data['Moneda']['nombre_moneda'], 
                    'simbolo_moneda' => $this->data['Moneda']['simbolo_moneda'])
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
                'errors' => $this->validationErrors['Moneda']
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