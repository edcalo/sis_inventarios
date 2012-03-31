<?php

switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Marca registrado', true),
                    'msg' => __('El nuevo Marca fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id' => $newID, 
                    'nombre_marca' => $this->data['Marca']['nombre_marca'], 
                    'descripcion_marca' => $this->data['Marca']['descripcion_marca'])
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
                'errors' => $this->validationErrors['Marca']
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