<?php
    
    include('../../vista/js/lib/Mailer/src/PHPMailer.php');
    include('../../vista/js/lib/Mailer/src/SMTP.php');
    include('../../vista/js/lib/Mailer/src/Exception.php');
    
    function correo($correoRec,$nombreRec){
        try{
        
            $emailTo = $correoRec;
            $nombre = $nombreRec;
            $subject = "Bienvenido a Macondo";
    
            $bodyEmail = "<p style='color: #000000;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;font-size: 40px;font-weight: bold'>Macondo</p><p style='font-size: 20px;font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;'>Hola,  $nombre, nos agrada que te hayas unido a Macondo, esperamos y esta experiencia sea la más agradable para ti, !Lee mucho y disfruta aun más!</p>";
            
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
    }
    
?>