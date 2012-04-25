<?php
$respuesta = array(
    'success'=> $eliminado,
    'mensage'=> array(
        'titulo'=> 'Eliminar Item',
        'msg'=> 'Se elimino el item exitosamente '
        
    ),
    'data'=>array()
);
echo json_encode($respuesta);
?>