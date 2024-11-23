<?php 	
    include ('../../setting/database.php');
    require_once "../models/main_model.php";

    $code_dolor = $_POST['code_dolor'];

    $Delete_Model = new Delete_Model();
    $delete_dolar = $Delete_Model->Delete_dolar($code_dolor);
?>