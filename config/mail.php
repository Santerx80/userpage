<?php

if(isset($_POST['submit'])) {
    if(!empty($_POST['name']) && !empty($_POST['mensaje']) && !empty($_POST['email'])) {
        $name = $_POST['name'];
        $mensaje = $_POST['mensaje'];
        $email = $_POST['email'];
        $asunto = "Your Subject Here"; // Define your subject
        $msg = $mensaje;

        $header = "From: noreply@example.com" . "\r\n";
        $header .= "Reply-To: noreply@example.com" . "\r\n";
        $header .= "X-Mailer: PHP/" . phpversion();
        $mail = @mail($email, $asunto, $msg, $header);
        if($mail){
            echo "<h4>¡Mail enviado!</h4>";
        }
    }
}

?>