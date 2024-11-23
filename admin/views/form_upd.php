<!--/ Marca /-->
<div id='viewsMarcaUpd' class="second_modal fade" id="upd_marca" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="second_modal-dialog" role="document">
	    <div class="second_modal-content">
		    <div class="second_modal-header">
			    <h5 class="second_modal-title" id="exampleModalLabel">Actualizar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#viewsMarcaUpd')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="second_modal-body">
				<form id="frm_upd_marca">	
					<label>Id</label>
					<input type="number" hidden = "" class="form-control" id="up_idH" name="up_idH">              
					<input type="number" class="form-control" disabled id="up_idD" name="up_idD">
					<label>Marca</label>
					<input type="text" class="form-control" id="up_marca" name="up_marca" required='required'>                   	
					<label>Dolar</label>
					<input type="number" class="form-control" id="up_dolar" name="up_dolar" required='required' pattern='[1-3]' placeholder="1 ~ No | 2 ~ Blue | 3 ~ Oficial">                      				
                    <div class="second_modal-body-">
                        <button type="button" id="btn_upd_marca" class="sub_btn btn_submit" data-dismiss="modal">Actualizar</button>
					</div>
				</form>
			</div>
				
			<div class="second_modal-footer">
				<button type="button" class="close_btn btn_close" data-dismiss="modal" onclick="btn_exit('#viewsMarcaUpd')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>

<!--/ Dólar /-->
<div id='viewsDolarUpd' class="second_modal fade" id="upd_dolar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="second_modal-dialog" role="document">
	    <div class="second_modal-content">
		    <div class="second_modal-header">
			    <h5 class="second_modal-title" id="exampleModalLabel">Actualizar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#viewsDolarUpd')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="second_modal-body">
				<form id="frm_upd_dolar">	
					<label>Id</label>
					<input type="number" hidden = "" class="form-control" id="up_idHDolar" name="up_idHDolar">              
					<input type="number" class="form-control" disabled id="up_idDDolar" name="up_idDDolar">                   	
					<label>Dolar</label>
					<input type="text" class="form-control" id="up_dolarDolar" name="up_dolarDolar" required='required'>              
					<label>Valor</label>
				    <input type="float" class="form-control" id="up_valorDolar" name="up_valorDolar" required='required'>                
                    
					<div class="second_modal-body-">
                        <button type="button" id="btn_upd_dolar" class="sub_btn btn_submit" data-dismiss="modal">Actualizar</button>
					</div>
				</form>
			</div>
				
			<div class="second_modal-footer">
				<button type="button" class="close_btn btn_close" data-dismiss="modal" onclick="btn_exit('#viewsDolarUpd')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>

<!--/ Listas /-->
<div id='viewsListaUpd' class="second_modal fade" id="upt_lista" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="second_modal-dialog" role="document">
	    <div class="second_modal-content">
		    <div class="second_modal-header">
			    <h5 class="second_modal-title" id="exampleModalLabel">Actualizar</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="btn_exit('#viewsListaUpd')">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			
			<div class="second_modal-body">
				<form id="frm_upt_lista">	
					<input type="text" hidden = "" class="form-control" id="upHLista" name="upHLista">              
					<input type="text" class="form-control" disabled id="upDLista" name="upDLista">                   	
					</br>
					<input type="date" class="form-control" id="upDate" name="upDate" required='required'> 
					</br>
					<select id="upState" class= "selector" name="upState">
						<option value="not">Seleccione:</option>
						<option value="Ac">Actualizar</option>
						<option value="Di">Disponible</option>      
					</select>
					
					<div class="second_modal-body-">
                        <button type="button" id="btn_upd_lista" class="sub_btn btn_submit" data-dismiss="modal">Actualizar</button>
					</div>
				</form>
			</div>
				
			<div class="second_modal-footer">
				<button type="button" class="close_btn btn_close" data-dismiss="modal" onclick="btn_exit('#viewsListaUpd')">Cerrar</button>		    
			</div>
		</div>
	</div>
</div>