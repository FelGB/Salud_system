<?php

class Modelo_Usuario
{
    private $conexion;

    function __construct()
    {

        require_once 'modelo_conexion.php';

        $this->conexion = new conexion();
        $this->conexion->conectar();
    }

    function VerificarUsuario($usuario, $contra)
    {

        $sql = "call SP_VERIFICAR_USUARIO('$usuario')";
        $arreglo = array();

        if ($consulta = $this->conexion->conexion->query($sql)) {

            while ($consulta_VU = mysqli_fetch_array($consulta)) {

                if (password_verify($contra, $consulta_VU["usu_pass"])) {
                    $arreglo[] = $consulta_VU;
                }
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }

    function listar_usuarios()
    {

        $sql = "call SP_LISTA_BY_USERS()";
        $arreglo = array();

        if ($consulta = $this->conexion->conexion->query($sql)) {

            while ($consulta_VU = mysqli_fetch_assoc($consulta)) {


                $arreglo["data"][] = $consulta_VU;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }

    function listar_combo_rol()
    {

        $sql = "call SP_ROLES_LIST()";
        $arreglo = array();

        if ($consulta = $this->conexion->conexion->query($sql)) {

            header("Content-Type: JSON");
            $i = 0;

            while ($row = mysqli_fetch_assoc($consulta)) {

                // $arreglo["data"][]=$consulta_VU;
                $arreglo[$i]['id'] = $row['rol_id'];
                $arreglo[$i]['rol'] = $row['rol_nombre'];
                $i++;
            }


            return ($arreglo);

            $this->conexion->cerrar();
        }
    }

    function listardos_combo_rol()
    {

        $sql = "call SP_ROLES_LIST()";
        $arreglo = array();
        $i = 0;
        if ($consulta = $this->conexion->conexion->query($sql)) {
            header("Content-Type: JSON");

            while ($consulta_VU = mysqli_fetch_assoc($consulta)) {


                $arreglo[$i]["result"] = $consulta_VU;
                $i++;
            }
            return $arreglo;
            $this->conexion->cerrar();
        }
    }



    function Registrar_Usuario($usuario, $contra, $sexo, $rol, $tel, $mail)
    {

        $sql = "call SP_REGISTER('$usuario','$contra','$sexo','$rol','$tel','$mail')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            if ($row = mysqli_fetch_array($consulta)) {
                // header("Content-Type: JSON");

                return $row[0];
                // $arreglo[$i]['respuesta']=trim($row[0]);
                // $i++;
                // return 1;
            }
            // return $arreglo;
            $this->conexion->cerrar();
        }
    }


    function baja_usu_by_id($usuarioid, $estatus)
    {

        $sql = "call SP_MODIFICAR_USUARIO_BY_ID('$usuarioid','$estatus')";

        if ($consulta = $this->conexion->conexion->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }

    function Registrar_Usuario_Editar($usuario, $sexo, $rol, $id)
    {

        $sql = "call SP_MODIFICAR_USUARIO_EDITAR_BY_ID('$usuario','$sexo','$rol','$id')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }

    function TraerDatos_Usuario_($usuario)
    {

        $sql = "call SP_VERIFICAR_USUARIO('$usuario')";

        $arreglo = array();

        if ($consulta = $this->conexion->conexion->query($sql)) {

            header("Content-Type: JSON");
            $i = 0;

            while ($row = mysqli_fetch_assoc($consulta)) {

                // $arreglo["data"][]=$consulta_VU;

                // $arreglo[$i]['id']=$row['rol_id'];
                // $arreglo[$i]['rol']=$row['rol_nombre']; 
                // $i++;
                $arreglo[] = $row;
            }


            return ($arreglo);

            $this->conexion->cerrar();
        }
    }

    function change_pass_usu($usuarioid, $nueva_contra)
    {

        $sql = "call SP_MODIFICAR_PASS_BY_ID('$usuarioid','$nueva_contra')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            return 1;
        } else {
            return 0;
        }
    }

    function Recuperar_Cuenta_user($correo, $contra)
    {

        $sql = "call SP_RESTABLECER_PASS('$correo','$contra')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            if ($row = mysqli_fetch_array($consulta)) {
                return $id = trim($row[0]);
            }
            $this->conexion->cerrar();
        }
    }


    function Conteo_usuario_login($usuario)
    {
        $sql = "call SP_CONTEO_LOGIN_USUARIO('$usuario')";
        if ($consulta = $this->conexion->conexion->query($sql)) {
            if ($row = mysqli_fetch_array($consulta)) {
                return $id = trim($row[0]);
            }
            $this->conexion->cerrar();
        }
    }
}
