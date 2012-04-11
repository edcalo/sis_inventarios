<?php
switch ($guardado) {
    case 1: {
            $respuesta = array(
                'success' => true,
                'mensage' => array(
                    'titulo' => __('Grupo registrado', true),
                    'msg' => __('El nuevo Grupo fue guardado con exito en el catalogo del sistema', true)
                ),
                'data' => array(
                    'id'=>$newID,
                    'padre_id'=> $this->data['Grupo']['padre_id'],
                    'codigo'=>$this->data['Grupo']['codigo'],
                    'nombre_grupo'=>$this->data['Grupo']['nombre_grupo'],
                    'descripcion_grupo'=>$this->data['Grupo']['descripcion_grupo']
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
                'errors' => $this->validationErrors['Grupo']
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