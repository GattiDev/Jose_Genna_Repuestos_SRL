<?php 
 	include ('../../setting/database.php'); /* --> Importo la Base de Dato*/
 	require_once "../models/main_model.php";

    // Obtengo todo los datos de la Tabla de Productos
    $Run_Model = new Run_Model();
	$Run_marca = $Run_Model->Run_marca();
?>

<table id="tb_marca" class="datatable"> 
	<thead>
	    <tr> 
			<th>Check</th>
			<th>Id</th>
			<th>Marcas</th>
            <th>Dolar</th>
			<th>Estado</th>
		</tr>
	</thead>
			
	<tbody>
		<?php 
			while ($get_marca = mysqli_fetch_assoc($Run_marca)) { ?>
				
				<tr>
					<td class="table-checkbox"><input type="checkbox" name="" id=""></td>
					<td><?php echo $get_marca['id']; ?></td>
					<td><?php echo $get_marca['brand']; ?></td>
					<?php
    					$Get_Model = new Get_Model();
						$Get_dolar = $Get_Model->Get_dolar($get_marca['id_dollars']);
						while ($dolar = mysqli_fetch_assoc($Get_dolar)) { 
							echo "<td>".$dolar['dollar']."</td>";
						}

						if($get_marca['statu'] == '-'){
							echo "<td><i class='Ag fa-solid fa-file-circle-minus'></i></td>";
						}elseif($get_marca['statu'] == '--'){
							echo "<td><i class='Pn fa-solid fa-file-circle-exclamation'></i></td>";
						}elseif($get_marca['statu'] == 'Di'){
							echo "<td><i class='Di fa-solid fa-file-circle-check'></i></i></td>";
						}else{
							echo "<td><i class='Ac fa-solid fa-file-circle-question'></i></td>";
						}

					?>
				</tr>
			<?php } 
        ?>			
	</tbody>
</table>

<!--/ Js /-->
<script type="text/javascript" src="js/table/btn_marca.js"></script>

<script>
	const tb_marca = new TbBtn_marca('#tb_marca', [
		{
			id: 'bAdd',
			text: 'Add',
			icon: 'fa-solid fa-folder-plus',
			toggle: 'modal',
			target: 'add_marca',
			action: function(){
				mostrar('#views_MarcaPut');	
			}
		},
		{
			id: 'bEdit',
			text: 'Edit',
			icon: 'fa-solid fa-folder-open',
			toggle: 'modal',
			target: '#upd_marca',
			action: function(){
				const row_marca = tb_marca.getDatos();	
				get_marca(row_marca);
			}													
		},
		{
			id: 'bDelete',
			text: 'Delete',
			icon: 'fa-solid fa-folder-minus',
			action: function(){
				const id_marca = tb_marca.getSelected();					
				delete_marca(id_marca);
			}		
		},
	]);
	tb_marca.parse();
</script>