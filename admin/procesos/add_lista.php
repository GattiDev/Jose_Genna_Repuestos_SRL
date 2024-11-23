<?php 
    include ('../../setting/database.php'); 
    require_once "../models/main_model.php";

    $Put_Model= new Put_Model();
    $put_lista = $Put_Model->Put_lista(
        $_POST['idMarca'], 
        $_POST['date']
    );

    //Cambio el estado de la Marca 
    $Update_Model= new Update_Model();
    $Update_marca = $Update_Model->Update_marcaStatu(
        $_POST['idMarca'], 
        'Di'
    );
     
?>
