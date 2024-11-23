<p>Acá podrás subir imagines al sitio web, para eso se debe <b>seleccionar el destino de la imagén</b> y presionar el  <b><i class="fa-solid fa-pen"></i></b> para poder completar los casilleros que corresponde.</p>
<p>Una vez que ya está todo completado presionar <b><i class="fa-solid fa-cloud-arrow-up"></i></b> para subir la imagen a la base de datos. </p>
                                                        
<div class="outer-container">
	<form action="../admin/controllers/uploadImages-control.php" method="POST" name="frmExcelImport" id="frmExcelImport" enctype="multipart/form-data">
        <div class= "subirImg">
            <!--Imagenes-->
            <label for="nombre">Destino</label>
            <select id="idDestino" class= "selector" name="idDestino">
                <option value="0">Seleccione:</option>
                <option value="1">Avisos</option> 
                <option value="2">Productos</option>  
            </select>
                   
            <button type="button" id="boton_click" class="btn btn-primary boton_click"><i class="icon fa-solid fa-pen fa-beat"></i></button>
                        
            <br>                                                    
            
            <label for="descripcion">Descripción</label>
            <textarea class='descripcion' type="texto" name='descripcion' required='required' disabled placeholder='Ej: Titulo|Descripción'></textarea>
              
            <br/>               

            <label for="fecha">Hasta que fecha la publicación</label>
            <input class="fecha" type="date" name="fecha" disabled />
                                       
            <div class="form-group">
                <input class="file" type="file" class="form-control-file" name="foto" disabled>
            </div>

            <div class="form-group">
                <button class="btn"  name="guardar" disabled>
                    <i class="icon fa-solid fa-cloud-arrow-up"></i>
                </button>                
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('#boton_click').click(function(){
            
            /* Para obtener el texto */
            var combo = document.getElementById("idDestino");
            var selected = combo.options[combo.selectedIndex].text;
            console.log(selected);
            if (selected != 'Seleccione:') {
                $('.btn').attr('disabled', false);

                if (selected == 'Avisos') {    
                    $('.descripcion').attr('disabled', true);
                    $('.fecha').attr('disabled', false); 
                }

                if (selected == 'Productos') {    
                    $('.descripcion').attr('disabled', false);
                    $('.fecha').attr('disabled', true);                    
                }
                
                $('.file').attr('disabled', false);
            }            
		});
	});

</script>
