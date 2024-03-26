<?php
require '../../modelo/modeo_usuario.php';


$arreglo = array();

if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $user = json_decode($data, true);

    // echo json_encode($user);

    $arreglo = $user;
}
$MU = new Modelo_Usuario();

$usuarioid = $arreglo[0]['usuarioid'];
$contrabd = $arreglo[0]['contrabd'];
$contra_actual = $arreglo[0]['contra_actual'];
$nueva_contra = password_hash($arreglo[0]['nueva_contra'], PASSWORD_DEFAULT);

if (password_verify($contra_actual, $contrabd)) {

    $consulta = $MU->change_pass_usu($usuarioid, $nueva_contra);

    echo json_encode($consulta);
} else {
    echo json_encode(2);
}



//     if(json_encode($user)){


//     echo json_encode("los datos han llegado");
//     echo json_encode($arreglo);

//     echo json_encode($arreglo[0]['contrabd']);
// }else{
//     echo json_encode("sin datos");
// }
