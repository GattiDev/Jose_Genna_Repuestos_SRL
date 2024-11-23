<?php 
    include ('../setting/database.php');
    require_once "../models/main_model.php";
    
    // INCOMPLETO 

    function Good_dev() {
        // Eliminar el nombre de usuario:
        unset($_SESSION["error_login"]);
        // Terminar la sesión:
        session_destroy();
        header("Location: ../dev/dev.php");
    }

    function Good() {
        // Eliminar el nombre de usuario:
        unset($_SESSION["error_login"]);
        // Terminar la sesión:
        session_destroy();
        header("Location: ../adm.php");
    }

    /*function Send_notice(){
        $remitente = "GattiDev@gattidev.com";
        $destinatario = "gattidev323@gmail.com";
        $asunto = "Te contactaron en el formulario de tu sitio web";
        $mensaje = "Tienes un mensaje desde el formulario de tu sitio web";
        $headers = "From: $remitente\r\nReply-to: $remitente";

        mail($destinatario, $asunto, $mensaje, $headers);
        $_SESSION["error_login"] = '¡ Le hemos enviado un correo. !';
        header("Location: ../login.php");
    }*/

    function Mistake(){
        $_SESSION["error_login"] = '¡ Datos Incorrecto. !';
        header("Location: ../admin/login.php"); 
    }

    // Continuamos la sesión
    session_start();
  
    $obj_GetModel = new Get_Model();
  
    $user_data = $_POST['user'];
    $pass_data = $_POST['password'];

    $fecha_act = date("d/m/Y");
    
    //--> Separadoar de la fecha actual
    $separator_act = explode('/',$fecha_act);
    $day_act = $separator_act[0];
    $month_act = $separator_act[1];
    $year_act = $separator_act[2];

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


?>