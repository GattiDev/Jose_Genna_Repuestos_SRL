<?php
include ('../../setting/database.php');
require_once "../models/main_model.php";

if(isset($_POST)){
    $destino = $_REQUEST['idDestino']; 
    $id_destiny = 0;

    if($destino != '0'){
     
        if($destino == '1'){ //---> Aviso
            $id_destiny = intval($destino);
        }

        if($destino == '2'){ //---> Productos
            $id_destiny = intval($destino);
        }
    }

    if($id_destiny != 0){
        //Forma para guardar la imagen en la base de datos
        if (isset($_FILES['foto']['name'])) {
            $type = $_FILES['foto']['type'];
            $permitido=array("image/png","image/jpeg");

            if( in_array($type,$permitido) ==false ){
                echo '<script language="javascript">alert("Error - Extension de Archivo no permitido !!!");window.location.href="../adm.php"</script>';
            }

            $archive = $_FILES['foto']['name'];
            $tamanoArchivo = $_FILES['foto']['size'];
            $imagenSubida = fopen($_FILES['foto']['tmp_name'], 'r');
            $binaryImage = fread($imagenSubida, $tamanoArchivo);

        }
    
        //Condicion si se cumple
        switch ($id_destiny){
            case 1:
                $title = "home-aviso";
                $description = "";
                $date = $_REQUEST['fecha'];
                $obj_PutUploadImages = new Put_Model();
                $data_UploadImages = $obj_PutUploadImages->Put_images($title, $description, $archive, $binaryImage, $type, $date, $id_destiny);
                
                echo '<script language="javascript">alert("Se agrego con exito !");window.location.href="../adm.php"</script>';
            break;

            case 2:
                $title = 'home-product';
                $description = $_REQUEST['descripcion'];
                $date = date("Y-m-d");
                $obj_PutUploadImages = new Put_Model();
                $data_UploadImages = $obj_PutUploadImages->Put_images($title, $description, $archive, $binaryImage, $type, $date, $id_destiny);
                
                echo '<script language="javascript">alert("Se agrego con exito !");window.location.href="../adm.php"</script>';
            break;
        }
    }else{
        echo '<script language="javascript">alert("Error - Debe selección un destino !!!");window.location.href="../adm.php"</script>';
    }
}
                  