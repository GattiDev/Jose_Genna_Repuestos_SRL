<?php 
    include ('../../setting/database.php');
    require_once "../models/main_model.php";
    
    
    
    require '../../bookstores/PhpMailer/Exception.php';
    require '../../bookstores/PhpMailer/PHPMailer.php';
    require '../../bookstores/PhpMailer/SMTP.php'; 
use PHPMailer\PHPMailer\PHPMailer;

    // INCOMPLETO 

    function Good_dev() {
        // Eliminar el nombre de usuario:
        unset($_SESSION["error_login"]);
        // Terminar la sesión:
        session_destroy();
        header("Location: ../../dev/dev.php");
    }

    function Good() {
        // Eliminar el nombre de usuario:
        unset($_SESSION["error_login"]);
        // Terminar la sesión:
        session_destroy();
        header("Location: ../adm.php");
    }

    function Send_notice(){
        /*$remitente = "GattiDev@gattidev.com";
        $destinatario = "gattidev323@gmail.com";
        $asunto = "Te contactaron en el formulario de tu sitio web";
        $mensaje = "Tienes un mensaje desde el formulario de tu sitio web";
        $headers = "From: $remitente\r\nReply-to: $remitente";

        mail($destinatario, $asunto, $mensaje, $headers);
        $_SESSION["error_login"] = '¡ Le hemos enviado un correo. !';
        header("Location: ../login.php");*/
        
        $mail = new PHPMailer;

        /*Variables*/
        $aviso = "laskda";
        $nombre = "Eze";
        $pass = "522";
    
        $mail->isSMTP();
        $mail->SMTPDebug = 0;
        $mail->Host = 'smtp.hostinger.com';
        $mail->Port = 587;
        $mail->SMTPAuth = true;
        $mail->Username = 'ventas@josegennarepuestos.com.ar';
        $mail->Password = 'Ven_Jg.2024';
    
        $mail->setFrom('ventas@josegennarepuestos.com.ar', 'Form - Vent.');
        $mail->addReplyTo($email, $aviso);
        $mail->addAddress('ventas@josegennarepuestos.com.ar', $nombre);
    
        $mail->Subject = 'Pedidos - SW';

        // Mesaje 
        $message = "Enviado por: " . $nombre . " \r\n";
        $message .= "Enviado el: " . date('d/m/Y', time()) . " \r\n";

        $message .= "Su e-mail es: " . $pass . " \r\n";

        // Envio
        $mail->Body = utf8_decode($message);

        if (!$mail->send()) {
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo"<script type=\"text/javascript\">alert('¡El correo fue enviado correctamente! Volver al inicio. '); window.location='../index.php';</script>";
        }
    }

    function Mistake(){
        echo"<script type=\"text/javascript\">alert('¡ ERROR ! - Datos Incorrecto.'); window.location='../login.php';</script>";
    }

    // Continuamos la sesión
    session_start();
  
    $Get_Model = new Get_Model();
    $obj_GetModel = new Get_Model();
  
    $user_data = $_POST['user'];
    $pass_data = $_POST['password'];
    ///var_dump('$user_data => ' .$user_data);
    //var_dump('$pass_data => ' .$pass_data);
    $fecha_act = date("d/m/Y");
    
    //--> Separadoar de la fecha actual
    $separator_act = explode('/',$fecha_act);
    $day_act = $separator_act[0];
    $month_act = $separator_act[1];
    $year_act = $separator_act[2];

    //var_dump('-------------------------------');

    //$data_admin = $obj_GetModel->Get_Admin($user_data);
    
     
    $filas  = mysqli_fetch_row($Get_Model->Get_Admin($user_data));
    // Verificar si hay filas o no
    if ($filas == 0) {
        Mistake();
    }else{
        var_dump("ese");
        $data_admin = $obj_GetModel->Get_Admin($user_data);
        while($getAdmin = mysqli_fetch_assoc($data_admin)){
        
            $admin_pass = $getAdmin['password'];
            $admin_date = $getAdmin['date'];

            //--> Separando la fecha que tengo una BD 
            $separator = explode('-',$admin_date);
            $year_bd = $separator[0];
            $month_bd = $separator[1];
            $day_bd = $separator[2]; 

            if($pass_data == $admin_pass){

                if($user_data == 'GattiDev'){                  
                    Good_dev();
                }elseif($year_bd > $year_act){               
                    Good();
                }elseif($month_bd > $month_act && $year_bd == $year_act){
                    Good();
                }elseif($day_bd > $day_act && $month_bd == $month_act && $year_bd == $year_act){
                    Good();
                }else{
                    Send_notice();              
                }
            } else{
                Mistake();
            }
           
        }
    } 
 


?>