<?php 	
    include ('../../setting/database.php');
    require_once "../models/main_model.php";
    
    $obj_Da = new Cluster_Model();
    $obj_Ds = new Cluster_Model();

    $id_setting = $_POST['id_setting'];

    $del_administrators = $obj_Da->Delete_administrator($id_setting);
    $del_setting = $obj_Ds->Delete_setting($id_setting); 
?>