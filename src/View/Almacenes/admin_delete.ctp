<?php
if($eliminado) {
    $respuesta = array(
        'success'=> $eliminado,
        'mensage'=>array(
            'Titulo'=>'Almacen Eliminado',
            'msg'=>'Se elimino correctamente el Almacen'
        )
    );
}else {
    $respuesta = array(
        'success'=> $eliminado,
        'mensage'=> array(
            'titulo'=> 'Error al eliminar',
            'msg'=> 'No se puede eliminar la injdustria '.pg_last_error()
        ),
    );
}
echo json_encode($respuesta);
?>