<?php
if($eliminado) {
    $respuesta = array(
        'success'=> $eliminado,
        'mensage'=>array(
            'Titulo'=>'Marca Eliminado',
            'msg'=>'Se elimino correctamente la Marca'
        )
    );
}else {
    $respuesta = array(
        'success'=> $eliminado,
        'mensage'=> array(
            'titulo'=> 'Error al eliminar',
            'msg'=> 'No se puede eliminar la gestion '.pg_last_error()
        ),
    );
}
echo json_encode($respuesta);
?>