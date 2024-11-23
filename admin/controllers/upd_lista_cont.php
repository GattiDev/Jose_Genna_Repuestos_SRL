<?php 
    include ('../../setting/database.php');
    require_once "../models/main_model.php";

    $marca = $_POST['upHLista'];
    $data = $_POST['upDate'];
    $state = $_POST['upState'];
    
    $Get_Model = new Get_Model();
    $get_marca = $Get_Model->Get_MarcaName($marca);

    while ($getMarca = mysqli_fetch_assoc($get_marca)) { 
        $id = $getMarca['id'];

        $updateModel = new Update_Model();
        $udtLista = $updateModel->Update_lista($id, $data, $state);

        $updateModelMS = new Update_Model();
        $udtMarcaStatu = $updateModelMS->Update_marcaStatu($id, $state);

        return var_dump('true');  
    }   

?>