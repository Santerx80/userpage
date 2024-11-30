<?php

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};

        require_once __DIR__ . '/../config/config.php';
        require __DIR__ . '/../phpmailer/src/PHPMailer.php';
        require __DIR__ . '/../phpmailer/src/SMTP.php';
        require __DIR__ . '/../phpmailer/src/Exception.php';

        //Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';      
    $mail->SMTPAuth   = true;              
    $mail->Username   = $email;            
    $mail->Password   = '';                  
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
    $mail->Port       = 465;                                    

    //Recipients
    $mail->setFrom($email, 'TIENDA ON');
    $mail->addAddress('santibece232@gmail.com');     

    $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');

    if($mail->send()){
        return true;
    } else {
        return false;
    }

} catch (Exception $e) {
    echo "Error al enviar el correo electronico: {$mail->ErrorInfo}";
    return false;
}

?>