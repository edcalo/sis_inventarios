<?php

switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Proveedor registrado', true),
                    'msg' => __('El nuevo Proveedor fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id' => $newID,
                    'nombre_proveedor' => $this->data['Proveedor']['nombre_proveedor'],
                    'direccion_proveedor' => $this->data['Proveedor']['direccion_proveedor'],
                    'telefono' => $this->data['Proveedor']['telefono'],
                    'contacto' => $this->data['Proveedor']['contacto'],
                    'email' => $this->data['Proveedor']['email'],
                    'email_contacto' => $this->data['Proveedor']['email_contacto'],
                )
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
                'errors' => $this->validationErrors['Proveedor']
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