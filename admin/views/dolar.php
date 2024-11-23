<?php 
    include ('../../setting/database.php'); /* --> Importo la Base de Dato*/
	require_once "../models/main_model.php";
	// Obtengo todo los datos de la Tabla de Productos
    $Run_Model = new Run_Model();
	$Run_dollar = $Run_Model->Run_dolar();
?>

<table id="tb_dolar" class="datatable"> 
	<thead>
	    <tr> 
			<th>Check</th>
			<th>Id</th>
			<th>Dollar</th>
			<th>Valor</th>
		</tr>
	</thead>
			
	<tbody>
		<?php 
			while ($get_dollar = mysqli_fetch_assoc($Run_dollar)) { 
                
                if($get_dollar['id'] != 1){ ?>
				
				    <tr>
					    <td class="table-checkbox"><input type="checkbox" name="" id=""></td>
					    <td><?php echo $get_dollar['id']; ?></td>
					    <td><?php echo $get_dollar['dollar']; ?></td>
					    <td><?php echo $get_dollar['worth']; ?></td>
				    </tr>
			    <?php } 
            }
        ?>			
	</tbody>
</table>

<!--/ Js /-->
<script type="text/javascript" src="js/table/btn_dolar.js"></script>

<script>
	const tb_dolar = new TbBtn_dolar('#tb_dolar', [
		{
			id: 'bAdd',
			text: 'Add',
			icon: 'fa-solid fa-dollar-sign',
			toggle: 'modal',
			target: 'add_dolar',
			action: function(){
				mostrar('#views_DolarPut');	
			}
		},
		{
			id: 'bEdit',
			text: 'Edit',
			icon: 'fa-solid fa-hand-holding-dollar',
			toggle: 'modal',
			target: '#upd_dolar',
			action: function(){
				const row_dolar = tb_dolar.getDatos();	
				get_dolar(row_dolar);
			}													
		},
		{
			id: 'bDelete',
			text: 'Delete',
			icon: 'fa-solid fa-circle-dollar-to-slot',
			action: function(){
				const id_dolar = tb_dolar.getSelected();					
				delete_dolar(id_dolar);
			}		
		},
	]);
	tb_dolar.parse();
</script>