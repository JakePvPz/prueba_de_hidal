$(document).ready(function(){

    $('#btnSend').click(function(){
    
        var errores ='';
        //validando el nombre
        if($('#names').val()==''){
            errores += '<p>Escriba un nombre</p>'
            $('#names').css("border-bottom-color", "#F14B4B")
        } else{
            $('#names').css("border-bottom-color", "#d1d1d1")
        }
           //validando el celular
       
           //validando el email
        if($('#email').val() ==''){
            errores += '<p>Ingrese un correo electronico</p>'
            $('#email').css("border-bottom-color", "#F14B4B")
        } else{
            $('#email').css("border-bottom-color", "#d1d1d1")
        }
           //validando el mensaje
        if($('#mensaje').val() ==''){
            errores += '<p>Escriba el mensaje a enviar</p>'
            $('#mensaje').css("border-bottom-color", "#F14B4B")
        }else{
            $('#mensaje').css("border-bottom-color", "#d1d1d1")

        }

        if( errores == '' == false){

            let mensajeModal = '<div class="modal_wrap">' + '<div class="mensaje_modal">' + errores + '<span id="btnClose"> Cerrar </span>' + '</div>' + '</div>'


          $('body').append(mensajeModal);               
        }
        //cerrando modalll
        $('#btnClose').click(function(){
            $('.modal_wrap').remove();

    });

});
});
