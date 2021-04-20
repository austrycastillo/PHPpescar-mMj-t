<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
require 'Constantes.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;
    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;

    $mail->Username = 'castilloaustry@gmail.com';
    $mail->Password = EMAIL_PASSWORD;

    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    ## MENSAJE A ENVIAR

    $mail->setFrom('castilloaustry@gmail.com');
    $mail->addAddress('austry.castillo@educacionit.com');

    $mail->isHTML(true);
    $mail->Subject = 'Esta es una prueba de email';
    $mail->Body = 'Hola mundo desde <b>phpmailer</b>';

    if($mail->send()){
        echo "Correo enviado";
    }

} catch (Exception $e) {
    echo 'Algo salio mal', $e->getMessage();
}