<?php 
    include ('../../setting/database.php'); /*Importo la Base de Dato*/
    require_once "../models/main_model.php";
    
    $Put_Model= new Put_Model();
	$put_marca = $Put_Model->Put_marca(
        $_POST['marca'], 
        $_POST['idDolar']
    );
?>
