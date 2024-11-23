<?php 
    include ('../../setting/database.php');
    require_once "../models/main_model.php";
    
    $obj_model = new Cluster_Model();
	$run_administrator = $obj_model->Run_administrator();
?>
<table id="dt_administrator" class="datatable"> 
	<thead>
	    <tr> 
			<th>Check</th>
			<th>Id</th>
			<th>Administrador</th>
			<th>Contraseña</th>
			<th>Licencia</th>
            <th>Fecha</th>
		</tr>
	</thead>
			
	<tbody>
		<?php 
			while ($get_administrator = mysqli_fetch_assoc($run_administrator)) { 
  
				$fecha = new DateTime($get_administrator['date']);
				$fecha_d_m_y = $fecha->format('d/m/Y');

				if($get_administrator['user'] != 'GattiDev'){ ?>
					<tr>
						<td class="table-checkbox"><input type="checkbox" name="" id=""></td>
						<td><?php echo $get_administrator['id_setting']; ?></td>
						<td><?php echo $get_administrator['user']; ?></td>
						<td><?php echo $get_administrator['password']; ?></td>
						<td><?php echo $get_administrator['license']; ?></td>
                    	<td><?php echo $fecha_d_m_y; ?></td>
					</tr>
				<?php }
			}
        ?>			
	</tbody>
</table>

<!--/ Js /-->
<script type="text/javascript" src="js/tb_botton.js"></script>

<script>

	const dt_administrator = new DT_Botton('#dt_administrator', [
		{
			id: 'bEdit',
			icon: 'fa-solid fa-user-pen',
			toggle: 'modal',
			target: '#modal_administratorUP',
			action: function(){
				const row_administrator = dt_administrator.getDatos();	
				obtain_administrator(row_administrator);
			}															
		},
	]);
	dt_administrator.parse();
</script>