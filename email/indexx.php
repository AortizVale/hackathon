
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['email'])) {
    $correo_destino = $_POST['email'];

    $mail = new PHPMailer(true);

    try {
        // Configuración de SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'pmartinez752@unab.edu.co';
        $mail->Password = 'Tengoodlife2004';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Configuración del correo
        $mail->setFrom('pmartinez752@unab.edu.co', 'OMIMED S.A');
        $mail->addAddress($correo_destino, 'OMIMED CITA');
        $mail->addCC('njaimes126@unab.edu.co');

        $mail->isHTML(true);
        $mail->Subject = 'OMIMED IPS';
        $mail->Body = 'Hola, Tu profesional está listo para recibirte, ¡Pasa al consultorio que ves en la Pantalla!';
        $mail->send();

        echo 'Correo enviado';
    } catch (Exception $e) {
        echo 'Mensaje ' . $mail->ErrorInfo;
    }
}
?>
