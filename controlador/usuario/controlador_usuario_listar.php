<?php

require '../../modelo/modeo_usuario.php';

    $MU= new Modelo_Usuario();
    $consulta = $MU->listar_usuarios();

    if($consulta){
        echo json_encode($consulta);
    }else{
        echo '{
		    "sEcho": 1,
		    "iTotalRecords": "0",
		    "iTotalDisplayRecords": "0",
		    "aaData": []
		}';
    }
    

    
?>
