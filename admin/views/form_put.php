<!--/ Marca - Inicio /-->
<div id='views_MarcaPut' class="modal fade" id="add_marca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#views_MarcaPut')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form id="frm_marca">
        
					<input type="text" class="form-control" id="marca" name="marca" required='required' placeholder="Ingrese la Marca">           
					<label for="nombre">Dolar</label>
                    <br>
					<select class= "selector" name="idDolar">
                        <option value="0">Seleccione:</option>
                        <?php 
							$Run_Model = new Run_Model();
							$run_dolar = $Run_Model->Run_dolar();
	                    	// Realizamos la consulta para extraer los datos
                          	while($get_dolar = mysqli_fetch_assoc($run_dolar)){ ?>
                              	<option  value="<?php echo $get_dolar['id']; ?>"> <?php echo $get_dolar['dollar'];?></option>
                            <?php } 
						?>
                 	</select>                 	
										
					<button type="button" id="btn_put_marca" class="sub_btn btn_submit" data-dismiss="modal">Agregar</button>
				</form>
			</div>
				
			<div class="modal-footer">
				<button type="button" class="close_btn btn_close" data-dismiss="modal" onclick="btn_exit('#views_MarcaPut')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>
<!--/ Fin /-->

<!--/ Dolar - Inicio /--> 
<div id='views_DolarPut' class="modal fade" id="add_dolar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#views_DolarPut')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form id="frm_dolar">
        
					<input type="text" class="form-control" id="tipoDolar" name="tipoDolar" required='required' placeholder="Tipo de Dólar">           
					 
					<input type="float" class="form-control" id="valorDolar" name="valorDolar" required='required' placeholder="Precio del Dólar">           
								
					<button type="button" id="btn_put_dolar" class="sub_btn btn_submit" data-dismiss="modal">Agregar</button>
				</form>
			</div>
				
			<div class="modal-footer">
				<button type="button" class="close_btn btn_close" data-dismiss="modal" onclick="btn_exit('#views_DolarPut')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div> 
<!--/ Fin /-->

<!--/ Lista - Inicio /-->
<div id='views_ListaPut' class="modal fade" id="add_lista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	    <div class="modal-content">
		    <div class="modal-header">
			    <h5 class="modal-title" id="exampleModalLabel">Agregar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#views_ListaPut')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="modal-body">
				<form id="frm_lista">
        
					<select class= "selector" name="idMarca">
                        <option value="0">Seleccione:</option>
                        <?php 
							$Run_Model = new Run_Model();
							$run_marca = $Run_Model->Run_marca();
	                    	// Realizamos la consulta para extraer los datos
                          	while($get_marca = mysqli_fetch_assoc($run_marca)){ 
								if($get_marca['statu'] == '--') {?>
                              		<option  value="<?php echo $get_marca['id']; ?>"> <?php echo $get_marca['brand'];?></option>
                            	<?php } 
							}
						?>
                 	</select>  
						
					<input type="date" class="form-control" id="date" name="date" required='required'>           
										               						
					<button type="button" id="btn_put_lista" class="sub_btn btn_submit" data-dismiss="modal">Agregar</button>
				</form>
			</div>
				
			<div class="modal-footer">
				<button type="button" class="close_btn btn_close" data-dismiss="modal" onclick="btn_exit('#views_ListaPut')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>
<!--/ Fin /-->