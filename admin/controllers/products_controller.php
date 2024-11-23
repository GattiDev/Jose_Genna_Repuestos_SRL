<?php
    include ('../../setting/database.php');
    require_once "../models/main_model.php";
    require_once("../../bookstores/Excel/extensiones/SpreadsheetReader.php");
    
    $contador = 0;
    
    if(isset($_POST)){
        $marca = $_POST['idMarca'];

        //-->  Obtengo el dato que se ingreso        
        if (isset($_POST["import"])){               
            
            $allowedFileType = ['application/vnd.ms-excel','text/xls','text/xlsx','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'];
    
            if(in_array($_FILES["file"]["type"],$allowedFileType)){
                
                //--> Muevo y guardo el archivo en la carpeta, para poder manipularlo 
                $targetPath = 'archivos-subidos/'.$_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);       

                /*$Reader = new SpreadsheetReader($targetPath);               
                $sheetCount = count($Reader->sheets());
        
                for($i=0; $i < $sheetCount; $i++){    
                    $Reader->ChangeSheet($i);
            
                    //--> Acá separa para poder ponerlo en su lugar 
                    foreach ($Reader as $Row){

                        $contador += 1 ;
                            
                    }                    
                } */
            }
            //--> Actualizo la cantidad de Producto que tiene la Marca
            $Update_Model = new Update_Model();
            $Update_marcaStatu = $Update_Model->Update_marcaStatu($marca, '--'); 
        }    
        
//---------------------------------------------------------------------------------------------------->        
        header('Location: https://josegennarepuestos.com.ar/admin/adm.php');
       // header('Location: http://localhost/GattiDev-JG-Sw-Nuevo-2024/admin/adm.php');
//---------------------------------------------------------------------------------------------------->   
    }  
?>