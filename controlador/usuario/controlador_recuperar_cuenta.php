<?php

    // use PHPMailer\PHPMailer;
    // use PHPMailer\Exception;
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    
    // require 'PHPMailer/src/Exception.php';
    // require 'PHPMailer/src/PHPMailer.php';
    // require 'PHPMailer/src/SMTP.php';

    require '../usuario/PHPMailer/src/Exception.php';
    require '../usuario/PHPMailer/src/PHPMailer.php';
    require '../usuario/PHPMailer/src/SMTP.php';

    require '../../modelo/modeo_usuario.php';

    
    $arreglo=array();

    if(isset($_POST)){
        $data = file_get_contents("php://input");
        $user = json_decode($data, true);
        $arreglo=$user;

     }
     $MU= new Modelo_Usuario();

    $correo = $arreglo[0]['correo'];
    $contra = password_hash($arreglo[0]['pass'],PASSWORD_DEFAULT);
    $contrapass = $arreglo[0]['pass'];
    
    $consulta = $MU->Recuperar_Cuenta_user($correo,$contra);
    // echo json_encode($consulta);

    if($consulta=="1"){
        $mail = new PHPMailer(true);
        $mail->CharSet = "UTF-8";

        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        

        try {
            //Server settings
            $mail->SMTPDebug = 0;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'bpepe1290@gmail.com';                     //SMTP username
            $mail->Password   = 'gyii aosx jpuz wwqc';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465; 
            // $mail->Port       = 587;  
            // $mail->Port       = 587;                                  //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('bpepe1290@gmail.com', 'Admin System');
            $mail->addAddress($correo, 'Felipe G');     //Add a recipient
                        //Name is optional
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');

            //Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Cambio de contraseña';
            $mail->Body    = 'La contraseña  se a cambiado <br> Tu nueva contraseña es:<b>'.$contrapass.'</b>  ';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo '1';
        } catch (Exception $e) {
            echo '0';
            
        }

    }elseif($consulta=="2"){
        echo '2';
    }

    

   
    
?>