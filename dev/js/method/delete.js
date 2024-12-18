'use strict'
//#####################################################################################################//
        //#############################---> ELIMINAR DATOS <---#############################//
//#####################################################################################################//

function delete_setting(id_setting){ //--> Setting

    if(id_setting > 0 && id_setting != 1){
        
        alertify.confirm('Eliminar Licencia', '¿ Seguro que deseas eliminar esta Licencia ?', function(){ 

            $.ajax({
                type:"POST",
                data:"id_setting=" + id_setting,
                url:"controllers/del_setting.php",
                success:function(r){
                    let posicion = r.indexOf("true");
                    if (posicion !== -1){
                        alertify.success("Fue eliminado con exito !");
                        timer();
                    }else{
                        alertify.error("¡ No se pudo eliminar !");
                    }
                }
            });
        }, function(){});
    }
}