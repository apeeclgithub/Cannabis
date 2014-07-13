
$(document).ready(function() {
    /* INICIO SCRIPT CONTACT FORM*/

    $("#submit_btn").click(function() { 
        //get input field values
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
            //Ajax post data to server
            $.post('function/contacto.php', post_data, function(response){  

                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    
                    //reset values in all input fields
                    $('#contact_form input').val(''); 
                    $('#contact_form textarea').val(''); 
                }
                
                $("#result").hide().html(output).slideDown();
            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    /* FIN SCRIPT CONTACT FORM*/
    /* INICIO SCRIPT CARRO*/
});
            function add(id, cantidad, precio, nombre){
                var parametro = {
                    "id"        : id,
                    "cantidad"  : cantidad,
                    "precio"    : precio,
                    "nombre"    : nombre
                };
                $.ajax({
                    data: parametro,
                    url: 'function/carrito.php',
                    type: 'post',
                    success: function(){
                        location.reload();
                    }
                });
            };
            function del(id){
                var dele = {
                    "delete": id
                }
                $.ajax({
                    data: dele,
                    url: 'function/carrito.php',
                    type: 'post',
                    success: function(){
                        location.reload();
                    }
                });
            };
            function delall(del){
                var delall = {
                    "delall" : del
                }
                $.ajax({
                    data: delall,
                    url: 'function/carrito.php',
                    type: 'post',
                    success: function(){
                        location.reload();
                    }
                });
            };
    /* FIN SCRIPT CARRO */

 /* INICIO SCRIPT REGISTRO FORM*/
function validarReg() {
    var name_err = email_err = pass_err = '';
    var name1 = document.getElementById("name1").value;
    var namexp = /[A-Z a-z]{3}/;
        if (namexp.test(name1)) {
            //alert('bien nombre');
        }else{
            name_err = 'mal nombre';
        }

    var email1 = document.getElementById("email1").value;
    var emailexp = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        if (emailexp.test(email1)) {
            //alert('bien mail');
        }else{
            email_err = 'mal mail';
        }


    var pass1 = document.getElementById("pass1").value;
    var passexp = /[A-Z a-z 0-9]{3}/;
        if (passexp.test(pass1)){
            //alert('bien pass');
        }else{
            pass_err = 'mal pass';
        }

    if (name_err !== '' || email_err !== '' || pass_err !== '') {
        alert(name_err + email_err + pass_err);
        return false;
    }

    //Si pasa las validaciones, enviar form modo async
    $.ajax({
      url: "function/registro.php",
      type: "POST",
      data: $("#regform").serialize(),
      beforeSend: function() {
        $("#result1").empty().html('<h1>Procesando...</h1>');
      },
      success: function(results) {
        $("#result1").delay(1000).empty().html('<h1>' + results + '</h1>');
        $('#regform').trigger("reset");
      }
    });
    return false;
}