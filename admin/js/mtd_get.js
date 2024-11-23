'use strict'

//-----> Marca <--------//
function get_marca(Data){
    if(Data){
        mostrar('#viewsMarcaUpd');
    }
    $('#up_idD').val(Data[0]);
    $('#up_idH').val(Data[0]);
    $('#up_marca').val(Data[1]);
    if(Data[2] == 'No'){
        $('#up_dolar').val('1');
    }
    if(Data[2] == 'Blue'){
        $('#up_dolar').val('2');
    }
    if(Data[2] == 'Oficial'){
        $('#up_dolar').val('3');
    }
}

function get_dolar(Data){
    if(Data){
        mostrar('#viewsDolarUpd');
    }
    $('#up_idDDolar').val(Data[0]);
    $('#up_idHDolar').val(Data[0]);
    $('#up_dolarDolar').val(Data[1]);
    $('#up_valorDolar').val(Data[2]);
}

function get_lista(Data){
    if(Data){
        mostrar('#viewsListaUpd');
    }
    $('#upDLista').val(Data[0]);
    $('#upHLista').val(Data[0]);
    $('#upDate').val(Data[1]);
}