
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
function validarReg(){

    var name1 = document.getElementById("name1").value;
    var email1 = document.getElementById("email1").value;
    var pass1 = document.getElementById("pass1").value;
    var day = document.getElementById("day").value;
    var month = document.getElementById("month").value;
    var year = document.getElementById("year").value;

if (name1 == '' && email1 == '' && pass1 == '' && day =='' && month =='' && year =='' ) {
      $('.error_class').empty().html('Campos vacios').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
    };


    var namexp = /[A-Z a-z]{3}/;
        if (namexp.test(name1)) {
            //alert('bien nombre');
        }else{
            //name_err = 'mal nombre';
      //if (name_err == '' ) {
      $('.error_class').empty().html('Ingrese Nombre').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
    //};
        }

    var emailexp = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        if (emailexp.test(email1)) {
            //alert('bien mail');
        }else{
      $('.error_class').empty().html('Ingrese e-mail válido').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
        }

    var passexp = /[A-Z a-z 0-9]{3}/;
        if (passexp.test(pass1)){
            //alert('bien pass');
        }else{
      $('.error_class').empty().html('Ingrese Contraseña').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
        }

    if (day!=='' && month !=='' && year !=='' ) {
        var today = new Date();
        var birthDate = new Date(year, month, day);
        var age = today.getFullYear() - birthDate.getFullYear();
        var m = today.getMonth() - birthDate.getMonth();
        if (age > 18) {
          //alert('mayor');
        }else{
      $('.error_class').empty().html('Debes ser mayor de edad').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;        }
    }else{
      $('.error_class').empty().html('Ingrese edad').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
    }
    //Si pasa las validaciones, enviar form modo async
    $.ajax({
      url: "function/registro.php",
      type: "POST",
      data: $("#regform").serialize(),
      beforeSend: function() {
        $("#result1").fadeOut(2000).empty().html('<h1>Procesando...</h1>');
      },
      success: function(results) {
        $("#result1").delay(1000).empty().html('<h1>' + results + '</h1>');
        $('#regform').trigger("reset");      }
    });
    return false;


}


 /* FIN SCRIPT REGISTRO FORM*/
 /* INICIO SCRIPT LOGIN ADMIN FORM*/

function validarLogin(){
  var useradmin = document.getElementById("useradmin").value;
  var passadmin = document.getElementById("passadmin").value;
    
    if (useradmin == '' && passadmin == '' ) {
      $('.error_class2').empty().html('Campos vacios').fadeIn(2000, function() {
        $(this).fadeOut();
      });
      return false;
    };

    var useradminexp = /[A-Z a-z]{3}/;
      if (useradminexp.test(useradmin)) {

      }else{
        $('.error_class2').empty().html('Error Usuario').fadeIn(2000, function() {
          $(this).fadeOut();
      });
        return false;
      }

    var passadminexp = /[A-Z a-z 0-9]{3}/;
      if (passadminexp.test(passadmin)){

      }else{
        $('.error_class2').empty().html('Error Contraseña').fadeIn(2000, function() {
          $(this).fadeOut();
      });
        return false;
      }

    $.ajax({
      url: "function/loginadmin.php",
      type: "POST",
      data: $("#loginadmin").serialize(),
      dataType: 'json',
      beforeSend: function() {
        $("#result2").fadeOut(2000).empty().html('<h1>Procesando...</h1>');
        $('#loginadmin').trigger("reset");
      },
      success: function(results) {
        if (results.error === '') {
          location.href = results.url;
        } else{
          $("#result2").delay(1000).empty().html('<h1>' + results.error + '</h1>');
          $('#loginadmin').trigger("reset");
        }
      }
    });
    return false;
}
 /* FIN SCRIPT LOGIN ADMIN FORM*/
 /* DATAGRID ADMIN*/


function adminCargar()
{
    $('#datagrid').load('function/consulta.php'); 

}

 /* fin ADMIN*/

 /* BUSCADOR ADMIN*/

function buscarAdmin (){
  
}

 /* FIN BUSCADOR ADMIN*/
