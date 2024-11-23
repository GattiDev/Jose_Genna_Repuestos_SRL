<?php 
    include ('../../setting/database.php');
    require_once "../models/main_model.php";

    $id = $_POST['up_idH'];
    $marca = $_POST['up_marca'];
    $dolar = $_POST['up_dolar'];
      
    if($marca != '' || $dolar != 0){
        $Update_Model = new Update_Model();
        $update_marca = $Update_Model->Update_marca($id, $marca, $dolar);
    }else{
        return var_dump('false');
    }
?>