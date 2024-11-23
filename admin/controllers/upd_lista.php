<?php 
    include ('../../setting/database.php');
    require_once "../models/main_model.php";
    
    $Run_Model = new Run_Model();
    $Run_marca = $Run_Model->Run_marca();
    
    while ($get_marca = mysqli_fetch_assoc($Run_marca)) { 
        
        if($get_marca['statu'] == 'Di'){
            
            $Update_Model= new Update_Model();
            $Update_marca = $Update_Model->Update_marcaStatu($get_marca['id'], 'Ac');
 
            $UpdateModel= new Update_Model();
            $Update_lista = $UpdateModel->Update_listaState($get_marca['id'], 'Ac');

            var_dump('true');
        }
       
    }
    
?>