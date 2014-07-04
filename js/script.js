
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

    /* INICIO SCRIPT REGISTRO FORM*/

    $("#submit_btn1").click(function() { 
        //get input field values
        var user_name1       = $('input[name=name1]').val(); 
        var user_email1      = $('input[name=email1]').val();
        var user_pass1      = $('input[name=pass1]').val();
        var day           = $('select[name=day]').val();
        var month           = $('select[name=month]').val();
        var year           = $('select[name=year]').val();

        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name1==""){ 
            $('input[name=name1]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email1==""){ 
            $('input[name=email1]').css('border-color','red'); 
            proceed = false;
        }
        if(user_pass1=="") {    
            $('input[name=pass1]').css('border-color','red'); 
            proceed = false;
        }

        if(day==""){
            $('select[name=day]').css('border-color','red');
            proceed = false;
        }
        if(month==""){
            $('select[name=month]').css('border-color','red');
            proceed = false;
        }
        if(year==""){
            $('select[name=year]').css('border-color','red');
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'userName1':user_name1, 'userEmail1':user_email1, 'userPass1':user_pass1, 'day':day, 'month':month, 'year':year};
            
            //Ajax post data to server
            $.post('function/registro.php', post_data, function(response){  

                //load json data from server and output message     
                if(response.type == 'error')
                {
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    
                    //reset values in all input fields
                    $('#contact_form1 input').val(''); 
                    $('#contact_form1 select').val('');
                }
                
                $("#result1").hide().html(output).slideDown();
            }, 'json');
            
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form1 input, #contact_form1 select").keyup(function() { 
        $("#contact_form1 input, #contact_form1 select").css('border-color',''); 
        $("#result1").slideUp();
    });
    /* FIN SCRIPT REGISTRO FORM*/

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
