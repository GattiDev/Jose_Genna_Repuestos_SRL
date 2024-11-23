<?php 
    include ('../../setting/database.php');
    require_once "../models/main_model.php";
    
    $obj_Ua = new Cluster_Model();
    $obj_Us = new Cluster_Model();

    $id = $_POST['up_id'];
    $license = $_POST['up_licencia'];
    $up_fecha = $_POST['up_fecha'];
    
    $fecha_act = date("d/m/Y"); 
    
    //--> Separando la fecha que me mandaron 
    $separator = explode('-',$up_fecha);
    $year = $separator[0];
    $month = $separator[1];
    $day = $separator[2];

    //--> Separadoar de la fecha actual
    $separator_act = explode('/',$fecha_act);
    $day_act = $separator_act[0];
    $month_act = $separator_act[1];
    $year_act = $separator_act[2];
   
    if($year > $year_act){
        $data_administrator = $obj_Ua->Update_administrator($id, $license, $up_fecha);
        $data_setting = $obj_Us->Update_setting($id, $license, $up_fecha);
        return var_dump('true');
    }
    
    if($year = $year_act){
        if($month > $month_act){
            $data_administrator = $obj_Ua->Update_administrator($id, $license, $up_fecha);
            $data_setting = $obj_Us->Update_setting($id, $license, $up_fecha);
            return var_dump('true');
        }else{
            return var_dump('Error - Fecha'); 
        }  
    }else{
        return var_dump('Error - Fecha');
    }
?>