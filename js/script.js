$(document).ready(function() {
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                      BUSQUEDA DE CLIENTES
  var consulta;
                                                                          
         //hacemos focus al campo de búsqueda
        $("#busqueda").focus();
                                                                                                    
        //comprobamos si se pulsa una tecla
        $("#busqueda").keyup(function(e){
                                     
              //obtenemos el texto introducido en el campo de búsqueda
              consulta = $("#busqueda").val();
                                                                           
              //hace la búsqueda
                                                                                  
              $.ajax({
                    type: "POST",
                    url: "function/buscar.php",
                    data: "b="+consulta,
                    dataType: "html",
                    beforeSend: function(){
                          //imagen de carga
                          $("#resultado").html("<p align='center'><img src='ajax-loader.gif' /></p>");
                    },
                    error: function(){
                          alert("error petición ajax");
                    },
                    success: function(data){                                                    
                          $("#resultado").empty();
                          $("#resultado").append(data);
                                                             
                    }
              });
                                                                                  
                                                                           
        });
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                      MOSTRAR DETALLE DE LISTA
$('li.dropdown').click(function() {
    $(this).children('ul').toggle();
});
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//
$(function() {

          $('#slides').slidesjs({
            width: 1190,
            height: 500,
            start: 1,
            navigation: false,
            play: {
              auto: true,
              interval:6000
            },
            pagination:{
              active: false
            }
          });
        });
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                    MODIFICA DATOS DEL CLIENTE
  $('#modifica').submit(function() {
      $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function(data) {       
              $('#data').html(data);
          }
      })        
      return false;
  }); 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                      FORMULARIO LOGIN CLIENTE
  $('#logincliente').submit(function() {
      $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          success: function(data) {    
              $('#data1').html(data);
          }
      })        
      return false;
  }); 

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                      FORMULARIO LOGIN ADMIN
  $('#loginadmin').submit(function() {
// Enviamos el formulario usando AJAX
      $.ajax({
          type: 'POST',
          url: $(this).attr('action'),
          data: $(this).serialize(),
          // Mostramos un mensaje con la respuesta de PHP
          success: function(data) {
       
              $('#data1').html(data);
          }
      })        
      return false;
  }); 
        
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                          FORMULARIO DE CONTACTO
  $("#submit_btn").click(function() { 
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
    
});

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                                CARRITO DE COMPRA
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


    function add0(id, cantidad, precio, nombre){
      var parametro = {
          "id"        : id,
          "cantidad"  : cantidad,
          "precio"    : precio,
          "nombre"    : nombre
      };
      $.ajax({
          data: parametro,
          url: '../../function/carrito.php',
          type: 'post',
          success: function(){
              $('.cont_sesion_top').reload();

          }
      });
  };
  function del0(id){
      var dele = {
          "delete": id
      }
      $.ajax({
          data: dele,
          url: '../../function/carrito.php',
          type: 'post',
          success: function(){
              location.reload();
          }
      });
  };
  function delall0(del){
      var delall = {
          "delall" : del
      }
      $.ajax({
          data: delall,
          url: '../../function/carrito.php',
          type: 'post',
          success: function(){
              location.reload();
          }
      });
  };
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                            ALERTA BORRAR REGISTRO
  function confirmar(){ 
    return confirm("Si Borra este registro no se podra recuperar, ¿confirma el borrado del registro?");
} 

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                         MENU DESPLEGABLE CARRITO
  $(function() {
  
      var menu_ul = $('.carro > li > ul'),
             menu_a  = $('.carro > li > a'),
             menu_ul_a = $('.carro > li > ul > li');
      
      menu_ul.hide();
  
      menu_a.mouseenter(function(e) {
          e.preventDefault();
          if(!$(this).hasClass('active')) {
              menu_a.removeClass('active');
              menu_ul.filter(':visible').slideUp('normal');
              $(this).addClass('active').next().stop(true,true).slideDown('normal');
          } else {

          }

      });
      menu_ul.mouseleave(function(e) {
          e.preventDefault();
          if(!$(this).hasClass('active')) {
            menu_ul.removeClass('active');
        menu_a.removeClass('active');
        menu_ul.filter(':visible').slideUp('normal');
              $(this).next().stop(true,true).slideUp('normal');
          } else {

          }
      });
  });

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                   MANTENER POSICION DEL SCROLL
window.onload=function(){
  var pos=window.name || 0;
  window.scrollTo(0,pos);
}
window.onunload=function(){
  window.name=self.pageYOffset || (document.documentElement.scrollTop+document.body.scrollTop);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                   CARGA ASINCRONICA COMUNAS
function CargarRegiones(val)
{
    $.ajax({ 
        type: "POST",
        url: 'function/consulta.php',
        data: 'reg_id='+val, 
        success: function(resp){ 
            $('#comuna').html(resp);
        } 
    }); 
}

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//                                                                                                                            fORMULARIO DE REGISTRO
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