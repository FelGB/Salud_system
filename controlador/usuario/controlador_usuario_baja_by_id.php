<?php
require '../../modelo/modeo_usuario.php';


$arreglo = array();

if (isset($_POST)) {
    $data = file_get_contents("php://input");
    $user = json_decode($data, true);

    // echo json_encode($user);

    $arreglo = $user;
}


$usuarioid = $arreglo[0]['usuario_id'];
$estatus =    $arreglo[0]['estatus'];

$MU = new Modelo_Usuario();

$consulta = $MU->baja_usu_by_id($usuarioid, $estatus);

echo ($consulta);

// echo json_encode($arreglo);
