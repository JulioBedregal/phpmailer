<?php
    require_once ("PHPMailer/clsMail.php");

    $mailSend = new clsMail();

    $bodyHTML = '
        <h2>Correo enviado desde phpMailer</h2>
        <br>
        <br>
        <br>
        Mensaje final';
    
    $enviado =  $mailSend->metEnviar("TITULO Correo de prueba","Eli coptero","sivanaeli2@gmail.com","Correo enviado con PHP MAILER", $bodyHTML);

    if($enviado){
        echo ("Enviado");
    }else {
        echo ("No se pudo enviar el correo");
    }

?>