<?php 
    include ('../../setting/database.php'); /* --> Importo la Base de Dato*/
    require_once "../models/main_model.php";

    $obj_run = new Run_Model();
	$data_listas = $obj_run->Run_listas();
?>

<table id="tb_lista" class="datatable"> 
	<thead>
	    <tr> 
        
			<th>Check</th>
            <th>Marca</th>
			<th>Fecha</th>
			<th></th>
		</tr>
	</thead>
			
	<tbody>
		<?php 
			while ($get_listas = mysqli_fetch_assoc($data_listas)) { 
                
                $id = $get_listas['id_brands'];
                
                $obj_get = new Get_Model();
                
                $data_brands = $obj_get->Get_Marca($id);

                while ($get_brands = mysqli_fetch_assoc($data_brands)) { ?>
				
				    <tr>						
                        <td><?php echo $get_brands['brand']; ?></td>
                        <td><?php echo $get_listas['date']; ?></td>
                        <?php 
                            if($get_listas['state'] == 'Di'){
                                echo "<td><i class='Di fa-solid fa-clipboard-check'></i></td>";
                            }else{ 
                                echo "<td><i class='Ac fa-solid fa-clipboard-question'></i></td>";
                            }	
                        ?>
				    </tr>
			    <?php }
            }
        ?>			
	</tbody>
</table>

<!--/ Js /-->
<script type="text/javascript" src="js/table/btn_lista.js"></script>

<script>
	const tb_lista = new TbBtn_lista('#tb_lista', [
		{
			id: 'bAdd',
			text: 'Add',
			icon: 'fa-solid fa-clipboard',
			toggle: 'modal',
			target: 'add_lista',
			action: function(){
				mostrar('#views_ListaPut');	
			}
		},
        {
			id: 'bEdit',
			text: 'Edit',
			icon: 'fa-solid fa-clipboard-list',
			toggle: 'modal',
			target: '#upt_lista',
			action: function(){
				const row_lista = tb_lista.getDatos();	
				get_lista(row_lista);
			}													
		},
		{
			id: 'bDelete',
			text: 'Delete',
			icon: 'fa-solid fa-trash-can-arrow-up',
			toggle: 'modal',
			target: '#delete_lista',
			action: function(){
				const row_dltLista = tb_lista.getSelected();	
				delete_lista(row_dltLista);
			}													
		},
		{
			id: 'bUpdate',
			text: 'Update',
			icon: 'fa-solid fa-clipboard-question',
			toggle: 'modal',
			target: '#update_lista',
			action: function(){
				update_lista();
			}													
		},
	] );
	tb_lista.parse();
</script>
