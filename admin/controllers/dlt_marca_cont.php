<?php 	
    include ('../../setting/database.php');
    require_once "../models/main_model.php";

    $code_marca = $_POST['code_marca'];

    //----> Elimina el archivo que utilize para subir a la base de datos.
    $Get_Model = new Get_Model();
    $Get_marca = $Get_Model->Get_Marca($code_marca);
    
    while ($getmarca = mysqli_fetch_assoc($Get_marca)) { 
        $file = $getmarca['brand'];
        $UrlArchivo = 'archivos-subidos/'.$file.'.xlsx';
        unlink($UrlArchivo);
    }

    $Delete_Model = new Delete_Model();
    $delete_marca = $Delete_Model->Delete_marca($code_marca);
?>