<?php 
    include ('../../setting/database.php'); /* --> Importo la Base de Dato*/
    require_once "../models/main_model.php";

    $id_setting = $_POST['id_setting'];
    $pass = $_POST['pass'];

    $obj_Gs = new Cluster_Model();
    $data_setting = $obj_Gs->Get_setting($id_setting);

    while($get_setting = mysqli_fetch_assoc($data_setting)){ 
        $setting_user = $get_setting['user'];
        $setting_license = $get_setting['license'];
        $setting_date = $get_setting['date'];

        $obj_Pa = new Cluster_Model();
        $data_administrator = $obj_Pa->Put_administrator($id_setting, $setting_user, $pass, $setting_license, $setting_date);
    }
?>