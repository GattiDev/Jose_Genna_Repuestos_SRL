'use strict'

var datos_edit = "";

//-----> Marca 
$('#btn_upd_marca').click(function(){
    datos_edit=$('#frm_upd_marca').serialize();
	$.ajax({
	    type:"POST",
		data:datos_edit,
		url:"../admin/controllers/upd_marca_cont.php",
		success:function(r){
            let posicion = r.indexOf("true");
            if (posicion !== -1){
                $('#frm_upd_marca')[0].reset();
                alertify.success("¡ Se actualizo correctamente. !");	
                 timer();				
            }else{
                alertify.error("¡ Código duplicado o Valor incorrecto. !");
            }
        }
    });
});

//-----> Dólar 
$('#btn_upd_dolar').click(function(){
    datos_edit=$('#frm_upd_dolar').serialize();
	$.ajax({
	    type:"POST",
		data:datos_edit,
		url:"../admin/controllers/upd_dolar_cont.php",
		success:function(r){
            let posicion = r.indexOf("true");
            if (posicion !== -1){
                $('#frm_upd_dolar')[0].reset();
                alertify.success("¡ Se actualizo correctamente. !");	
                 timer();				
            }else{
                alertify.error("¡ Código duplicado o Valor incorrecto. !");
            }
        }
    });
});

//-----> Listas 
$('#btn_upd_lista').click(function(){
    datos_edit=$('#frm_upt_lista').serialize();
	$.ajax({
	    type:"POST",
		data:datos_edit,
		url:"../admin/controllers/upd_lista_cont.php",
		success:function(r){
            console.log(r);
            let posicion = r.indexOf("true");
            if (posicion !== -1){
                alertify.success("¡ Se actualizo correctamente. !");	
                 timer();				
            }else{
                alertify.error("¡ Código duplicado o Valor incorrecto. !");
            }
        }
    });
});

//-----> Listas para actualizar las lisatas 
function update_lista(){
    $.ajax({
	    type:"POST",
		data:datos_edit,
		url:"../admin/controllers/upd_lista.php",
		success:function(r){
            let posicion = r.indexOf("true");
            if (posicion !== -1){
                $('#frm_upd_dolar')[0].reset();
                alertify.success("¡ Actulizar lista. !");	
                 timer();				
            }else{
                alertify.error("¡ No hay lista para Actulizar. !");
            }
        }
    });
}