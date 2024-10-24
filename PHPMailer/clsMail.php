<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

class clsMail{

    private $mail = null;
    
    function __construct(){
        $this->mail = new PHPMailer();
        $this->mail->isSMTP();
        $this->mail->SMTPAuth = true;
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->SMTPSecure = 'tls';
        //$this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->Host = "smtp.gmail.com";
        $this->mail->Port = 587;
        //$this->mail->Port = 465;
        $this->mail->Username = "cuentita.pruebitas@gmail.com";
        $this->mail->Password = "plortztdkmaookja";
    }


    public function metEnviar(string $titulo, string $nombre, string $correo, string $asunto, string $bodyHTML){
        $this->mail->setFrom("cuentita.pruebitas@gmail.com", $titulo);
        $this->mail->addAddress($correo,$nombre);
        $this->mail->Subject = $asunto;
        $this->mail->Body = $bodyHTML;
        $this->mail->isHTML(true);
        $this->mail->CharSet = "UTF-8";
        return $this->mail->send();
    }
}

?>