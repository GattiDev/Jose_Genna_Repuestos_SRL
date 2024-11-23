<?php 
    include ('../../setting/database.php'); /* --> Importo la Base de Dato*/
    require_once "../models/main_model.php";

    $admin = $_POST['adm'];
    $license = $_POST['licenseH'];
    $date = $_POST['fecha'];

    $obj_Ps = new Cluster_Model();
	$put_setting = $obj_Ps->Put_setting($admin, $license, $date);
?>