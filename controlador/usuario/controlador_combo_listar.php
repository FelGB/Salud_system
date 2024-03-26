<?php
    require '../../modelo/modeo_usuario.php';
    $combo =[];
    $MU= new Modelo_Usuario();
    $consulta = $MU->listar_combo_rol();
    // $combo=$consulta
    
    echo json_encode($consulta,JSON_PRETTY_PRINT);
    // echo json_encode($consulta);

?>