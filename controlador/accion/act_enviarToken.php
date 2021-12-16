<?php
    session_start();
    include('../../vista/js/lib/Mailer/src/PHPMailer.php');
    include('../../vista/js/lib/Mailer/src/SMTP.php');
    include('../../vista/js/lib/Mailer/src/Exception.php');
    require_once (__DIR__."/../mdb/mdbUsuario.php");
    
    $correoRec = $_POST['correo'];
    $token = $_POST['token'];
    $_SESSION['CORREO'] = $correoRec;
    correo($correoRec,$token);
    function correo($correoRec,$token){
        try{
            $emailTo = $correoRec;
            $subject = "Reestablecer contrasena Macondo";
    
            $bodyEmail = "su token para restablecer la contraseña es: $token";

            
            $fromemail = "macondo2222@hotmail.com";
            $fromname = "MACONDO";
            $host = "smtp.live.com";
            $port = "587";
            $SMTPAuth = "login";
            $SMTPSecure = "tls";
            $password = "macondo1234";
    
            $mail = new PHPMailer\PHPMailer\PHPMailer();
    
            $mail->isSMTP();
            $mail->SMTPDebug = 0;
            $mail->Host = $host;
            
            $mail->Port = $port;
            $mail->SMTPAuth = $SMTPAuth;
            $mail->SMTPSecure = $SMTPSecure;
            $mail->Username = $fromemail;
            $mail->Password = $password;
            
            $mail->setFrom($fromemail, $fromname);
            $mail->addAddress($emailTo);
            
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $bodyEmail;
            
            if(!$mail->send()){
                echo "no se envio";die();
            }
        }catch(Exception $e){
    
        } 
        $res = insertarToken($correoRec, $token);
        
        if($res != NULL){
            exit("si");
        }else{
            exit("no");
        }
    }
    
?>