'use strict';
//------------------------->  Funcion de los Botones 

//----> Variales
var state_marcas = '';
var state_product = '';
var state_dolar = '';
var state_lista = '';
var state_subImg = '';
var state_Img = '';
//------------------------->  Funcion de las Opciones 
function timer(){
    setTimeout(function(){
        location.reload();
    }, 2000);
}

function btn_exit(name_id){
    var exit_modal = document.querySelector(name_id);
    exit_modal.style.display = "none";
};

function mostrar(modal){
    var views = document.querySelector(modal);
    views.style.display = "block";
}

function ocultar(tb){
    var disgise_tb = document.querySelector(tb); //-> Tb User
    disgise_tb.style.display = "none";
}

function enable(Descrip){
    var titulo = document.querySelector("#titulo"); //---> Obtengo el Div del titulo
    titulo.innerHTML = Descrip; //---> Modifico el Titulo
    
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////// HOME ///////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function btn_marcas(){
    /*---> Deshabilito <---*/
	ocultar('.productos');    
    ocultar('.dolar');
	ocultar('.listas');
	ocultar('.subImg');
    ocultar('.img');
    
    /*---> Titulo <---*/
    enable('Marcas');

    /*---> Habilitado <---*/  
	if(state_marcas == ''){
        $(".marcas").show(); //---> Visible
        $('.marcas').load('views/marca.php'); //--->  Cargo la tabla
		state_marcas = 'Ya esta cargado';
	}else{
		var marcas = document.querySelector(".marcas");
		marcas.style.display = "block";
	}
    
};

function btn_product(){
    ocultar('.marcas');
    ocultar('.dolar');
	ocultar('.listas');
	ocultar('.subImg');
    ocultar('.img'); 
    
    enable('Subir Productos');

    if(state_product == ''){
        $(".productos").show();
        $(".productos").load('views/producto.php');
        state_product = 'Ya esta cargado';
    }else{
        var product = document.querySelector(".productos");
        product.style.display = "block";
    }
};

function btn_dolar(){
    ocultar('.marcas');
	ocultar('.productos');    
	ocultar('.listas');
	ocultar('.subImg');
    ocultar('.img');
    
    enable('Dólar');

    if(state_dolar == ''){
        $(".dolar").show();
        $(".dolar").load('views/dolar.php');
        state_dolar = 'Ya esta cargado';
    }else{
        var dolar = document.querySelector(".dolar");
        dolar.style.display = "block";
    }
}

function btn_lista(){
    ocultar('.marcas');
	ocultar('.productos');    
    ocultar('.dolar');
	ocultar('.subImg');
    ocultar('.img');
    
    enable('Activar Lista');

    if(state_lista == ''){
        $(".listas").show();
        $(".listas").load('views/lista.php');
        state_lista = 'Ya esta cargado';
    }else{
        var lista = document.querySelector(".listas");
        lista.style.display = "block";
    }
    
}

function btn_subImg(){
    ocultar('.marcas');
	ocultar('.productos');    
    ocultar('.dolar');
	ocultar('.listas');
    ocultar('.img');
    
    enable('Subir Imágenes');
    
    if(state_subImg == ''){
        $(".subImg").show();
        $(".subImg").load('views/uploadImages.php');
        state_subImg = 'Ya esta cargado';
    }else{
        var subImg = document.querySelector(".subImg");
        subImg.style.display = "block";
    }
}

function btn_Img(){
    ocultar('.marcas');
	ocultar('.productos');    
    ocultar('.dolar');
	ocultar('.listas');
	ocultar('.subImg');
   
    enable('Imágenes');

    if(state_Img == ''){
        $(".img").show();
        $(".img").load('views/img.php');
        state_Img = 'Ya esta cargado';
    }else{
        var Img = document.querySelector(".img");
        Img.style.display = "block";
    }
    
}