<?php 	
    include ('../../setting/database.php');
    require_once "../models/main_model.php";

    $code_lista = $_POST['code_lista'];
    
    $Get_Model = new Get_Model();
    $get_marca = $Get_Model->Get_MarcaName($code_lista);
    
    while ($getMarca = mysqli_fetch_assoc($get_marca)) { 
        $id = $getMarca['id'];

        $Delete_Model = new Delete_Model();
        $delete_lista = $Delete_Model->Delete_lista($id);

        $Update_Model = new Update_Model();
        $Update_Marca = $Update_Model->Update_marcaStatu($id, '--');
    }
?>