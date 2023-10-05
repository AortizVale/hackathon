<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'pmartinez752@unab.edu.co';
    $mail->Password = 'Tengoodlife2004';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('pmartinez752@unab.edu.co', 'OMIMED S.A.S');
    $mail->addAddress('pedroestebanmarsan@gmail.com', 'OMIMED CITA');
    $mail->addCC('njaimes126@unab.edu.co');

    $mail->isHTML(true);
    $mail->Subject = 'OMIMED IPS';
    $mail->Body = 'Hola, Tu profesional esta listo para recibirte, ¡Pasa al consultorio que ves en la Pantalla!';
    $mail->send();

    echo 'Correo enviado';
} catch (Exception $e) {
    echo 'Mensaje ' . $mail->ErrorInfo;
}
