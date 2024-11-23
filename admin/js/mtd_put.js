$(document).ready(function(){
    $('#btn_put_marca').click(function(){
        datos=$('#frm_marca').serialize();

        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/add_marca.php",
            success:function(r){
                console.log(r);
                let posicion = r.indexOf("true");
                console.log(posicion);
                if (posicion !== -1){
                    console.log('Si estoy');
                    alertify.success("Se agrego con exito !"); 
                    timer();             
                }else{
                    console.log('No estoy');
                    alertify.error("No se pudo agregar...");
                }
            }
        });
       
    });       
});

$(document).ready(function(){
    $('#btn_put_dolar').click(function(){
        datos=$('#frm_dolar').serialize();

        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/add_dolar.php",
            success:function(r){
                
                let posicion = r.indexOf("true");
                if (posicion !== -1){
                    console.log('Si estoy');
                    alertify.success("Se agrego con exito !"); 
                    timer();             
                }else{
                    console.log('No estoy');
                    alertify.error("No se pudo agregar...");
                }
            }
        });
       
    });       
});

$(document).ready(function(){
    $('#btn_put_lista').click(function(){
        datos=$('#frm_lista').serialize();

        $.ajax({
            type:"POST",
            data:datos,
            url:"procesos/add_lista.php",
            success:function(r){
              
                let posicion = r.indexOf("true");
                if (posicion !== -1){
                    console.log('Si estoy');
                    alertify.success("Se agrego con exito !"); 
                    timer();             
                }else{
                    console.log('No estoy');
                    alertify.error("No se pudo agregar...");
                }
            }
        });
       
    });       
});