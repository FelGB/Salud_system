<?php
    require '../../modelo/modeo_usuario.php';

        
        $arreglo=array();

        if(isset($_POST)){
            $data = file_get_contents("php://input");
            $user = json_decode($data, true);

            // echo json_encode($user);

        $arreglo=$user;

        }
        $MU= new Modelo_Usuario();

        $usuario = $arreglo[0]['user'];
        $consulta = $MU->Conteo_usuario_login($usuario);
        echo json_encode($consulta);


        
        
        
    //         if(json_encode($user)){

        
    //     echo json_encode("los datos han llegado");
    //     echo json_encode($arreglo);

    //     echo json_encode($arreglo[0]['user']);
    // }else{
    //     echo json_encode("sin datos");
    // }

?>
