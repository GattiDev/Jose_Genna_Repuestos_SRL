<?php
    require '../bookstores/PhpMailer/Exception.php';
    require '../bookstores/PhpMailer/PHPMailer.php';
    require '../bookstores/PhpMailer/SMTP.php'; 

    use PHPMailer\PHPMailer\PHPMailer;
    $mail = new PHPMailer;

    /*Variables*/
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $localidad = $_POST["localidad"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mesaje = $_POST["mesaje"];

    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'administracion@josegennarepuestos.com.ar';
    $mail->Password = 'Adm_Jg.2023';
    
    $mail->setFrom('administracion@josegennarepuestos.com.ar', 'Form - Adm.');
    $mail->addReplyTo($email, $nombre);
    $mail->addAddress('administracion@josegennarepuestos.com.ar', $nombre);
    
    $mail->Subject = $asunto;

    // Mesaje 
    $message = "Enviado por: " . $nombre . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y', time()) . " \r\n";

    $message .= "Su e-mail es: " . $email . " \r\n";

    $message .= "Teléfono de contacto: " . $telefono . " \r\n";

    $message .= "Localidad: " . $localidad . " \r\n";

    $message .= "Asunto: " . $asunto . " \r\n";

    $message .= "Mensaje: " . $_POST['mesaje'] . " \r\n";

    // Envio
    $mail->Body = utf8_decode($message);

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo"<script type=\"text/javascript\">alert('¡El correo fue enviado correctamente! Volver al inicio. '); window.location='../index.php';</script>";
    }

?>