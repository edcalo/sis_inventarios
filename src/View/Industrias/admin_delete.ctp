<?php
if($eliminado) {
    $respuesta = array(
        'success'=> $eliminado,
        'mensage'=>array(
            'Titulo'=>'Industria Eliminado',
            'msg'=>'Se elimino correctamente la Industria'
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