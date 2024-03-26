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

$usuario = $arreglo[0]['usuario'];
$contra = password_hash($arreglo[0]['contra'], PASSWORD_DEFAULT);
$sexo = $arreglo[0]['sexo'];
$rol = $arreglo[0]['rol'];
$tel = $arreglo[0]['telefono'];
$mail = $arreglo[0]['correo'];

$consulta = $MU->Registrar_Usuario($usuario, $contra, $sexo, $rol, $tel, $mail);

echo ($consulta);


// echo json_encode($arreglo);

// if (json_encode($user)) {


//     echo json_encode("los datos han llegado");
//     echo json_encode($arreglo);

//     echo json_encode($arreglo[0]['usuario']);
// } else {
//     echo json_encode("sin datos");
// }
