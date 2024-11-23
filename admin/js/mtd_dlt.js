'use strict'

function delete_marca(code_marca){
   
    if(code_marca > 0){
        
        alertify.confirm('Eliminar Marca', '¿Seguro que deseas eliminar está Marca ?', function(){ 

            $.ajax({
                type:"POST",
                data:"code_marca=" + code_marca,
                url:"../admin/controllers/dlt_marca_cont.php",
                success:function(r){
                    let posicion = r.indexOf("true");
                    if (posicion !== -1){
                        alertify.success("Se eliminado con exito !");
                        timer();
                    }else{
                        alertify.error("No se pudo eliminar...");
                    }
                }
            });
        }, function(){});
    }
}

function delete_dolar(code_dolor){
   
    if(code_dolor > 0){
        
        alertify.confirm('Eliminar Dólar', '¿Seguro que deseas eliminar está Dólar ?', function(){ 

            $.ajax({
                type:"POST",
                data:"code_dolor=" + code_dolor,
                url:"../admin/controllers/dlt_dolar_cont.php",
                success:function(r){
                    let posicion = r.indexOf("true");
                    if (posicion !== -1){
                        alertify.success("Se eliminado con exito !");
                        timer();
                    }else{
                        alertify.error("No se pudo eliminar...");
                    }
                }
            });
        }, function(){});
    }
}

function delete_lista(code_lista){
   
    if(code_lista > ''){
        
        alertify.confirm('Eliminar Lista', '¿Seguro que deseas eliminar está Lista ?', function(){ 

            $.ajax({
                type:"POST",
                data:"code_lista=" + code_lista,
                url:"../admin/controllers/dlt_lista_cont.php",
                success:function(r){
                    let posicion = r.indexOf("true");
                    if (posicion !== -1){
                        alertify.success("Se eliminado con exito !");
                        timer();
                    }else{
                        alertify.error("No se pudo eliminar...");
                    }
                }
            });
        }, function(){});
    }
}