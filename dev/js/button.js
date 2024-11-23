'use strict';

//----> Variales
var estado_administrator = '';
var estado_license = '';

//----> Funcion para que cargue la ventana
function timer(){
    setTimeout(function(){
        location.reload();
    }, 2000);
}

//----> Funcion para cerrar el Modal
function btn_exit(name_id){
    var exit_modal = document.querySelector(name_id);
    exit_modal.style.display = "none";
};

//----> Funcion para mostrar el Modal
function mostrar(modal){
    var views = document.querySelector(modal);
    views.style.display = "block";
}

//----> Funcion para ocultar la Tabla 
function ocultar(tb){
    var disgise_tb = document.querySelector(tb);
    disgise_tb.style.display = "none";
}

//----> Funcion para cambiar el Titulo 
function enable(title){
    var titulo = document.querySelector("#titulo");
    titulo.innerHTML = title; 
}

function btn_admin(){  //--> Button administrators

    ocultar('.tb_license');

    enable('Listado de Administradores');
    
    mostrar('#modal_administrator');
    //---/ Condición/---//
	if(estado_administrator == ''){
        $('.tb_administrator').show(); //---> Visible
        $('.tb_administrator').load('views/tb_administrator.php'); //--->  Cargo la tabla
		estado_administrator = 'La tabla ya esta cargada';
	}else{
		var tb_administrator = document.querySelector(".tb_administrator");
		tb_administrator.style.display = "block";
	}
};

function btn_license(){ //--> Button license
    
    ocultar('.tb_administrator');

    enable('Listado de Licencias');

    //---> Habilitado <---//
    if(estado_license == ''){
        $('.tb_license').show();
        $('.tb_license').load('views/tb_license.php');
        estado_license = 'La tabla ya esta cargada';
    }else{
        var tb_license = document.querySelector(".tb_license");
        tb_license.style.display = "block";
    }
};