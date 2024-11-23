<?php 
    include ('../../setting/database.php'); /*Importo la Base de Dato*/
    require_once "../models/main_model.php";
    
    $Put_Model= new Put_Model();
	$put_dolar = $Put_Model->Put_dolar(
        $_POST['tipoDolar'], 
        $_POST['valorDolar']
    );
?>
