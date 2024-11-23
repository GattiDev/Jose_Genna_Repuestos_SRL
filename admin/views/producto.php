<?php
 	include ('../../setting/database.php'); /* --> Importo la Base de Dato*/
 	require_once "../models/main_model.php";
    // Cifrar la contraseña
    $Run_Model = new Run_Model();
	$Run_Marca = $Run_Model->Run_marca();			
?>

<p>Primero tenemos que seleccionar la lista, <b>en caso que no este es porque no se eliminó los productos anteriores  </b>, para eso tenemos que ir a la opción de <b>Productos</b>.</p>
<p>Después se debe seleccionar el archivo de Excel, <b>con la extensión .xlsx</b> y presionar “Subir Lista”.</p> 
			
<div class="outer-container">								
	<form action="../admin/controllers/products_controller.php"  method="POST" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">                   
 		<div class= "marca">
        	<label for="nombre">Marcas</label>
            <select class= "selector" name="idMarca">
            	<option value="0">Seleccione:</option>
            	<?php
					while($get_marca = mysqli_fetch_assoc($Run_Marca)){ 
						if($get_marca['statu'] == '-' || $get_marca['statu'] == 'Ac'){ ?>	
							<option  value="<?php echo $get_marca['id']; ?>"> <?php echo $get_marca['brand'];?></option>
						<?php } 
					}
                ?>			
            </select>                    	
        </div>
                
		<div>
        	<label>Elija Archivo Excel</label> <input type="file" name="file" id="file" accept=".xls,.xlsx">              	
        </div>
		</br>
		<button type="submit" id="btn_submit" class="sub_btn btn_submit" name="import" data-dismiss="modal">Subir</button>
	
	</form> 
	</br>
</div>