<?php 
    include ('../../setting/database.php');
    require_once "../models/main_model.php";

    $id = $_POST['up_idHDolar'];
    $dolar = $_POST['up_dolarDolar'];
    $valor = $_POST['up_valorDolar'];   
    
    if($dolar != '' || $valor != 0 ){
        $Update_Model = new Update_Model();
        $update_dolar = $Update_Model->Update_dolar($id, $dolar, $valor);
    }else{
        return var_dump('false');
    }
?>