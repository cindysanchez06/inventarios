//---------VALIDACIONESSSSSSSSSSSSSSSSS--------
//---------------------------------------------
//lo utilizamos cuando queremos iniciar nuestro código jQuery después de que la pagina este ya cargada.
$(document).ready(function(){

//validacion de telefono
  $("#telefono").blur(function () {  
    //si los caracteres son menores a 7 entra al ciclo y muestra un mensaje en el div con id(infotelefono)
    if($("#telefono").val().length <7) {  
        document.getElementById('infotelefono').innerHTML = ('<div id="Error">Minimum 7 digits</div>');
        return false;  
    }
    //si los caracteres son mayores a 7 entra al ciclo y muestra un mensaje en el div con id(infotelefono)
    else if($("#telefono").val().length >7) {  
        document.getElementById('infotelefono').innerHTML = ('<div id="Error">Maximum 7 digits</div>');
        return false;  
    }
    //si la validacion no se cumple desaparece el mensaje
    else{
        document.getElementById('infotelefono').style.display='none';
        return false;  
    }  
    
});
//validacion de indentificacion que no exista
  //cuando cambien de input la funcion se activa
    $('#identificacion').blur(function(){
      //mientras la funcion carga nos aparecera un gif que esta en el id(cargador_empresa) y aparecera el el div con id(Info)
    $('#Info').html($("#cargador_empresa").html()).fadeOut(1000);
    //declaramos una variable y le asignamos el valor que trae el input con id(identificacion)
        var identificacion = $('#identificacion').val();
        var token = $('#token').val();
        //metodo ajax
        $.ajax({
          //declaramos tipo de envio
            type: 'post',
            //ruta que vamos a usar
            url: '/empleado/validacion',
            headers: {'X-CSRF-TOKEN': token},
            //en data traemos lo que hay en identificacion
            data: {identificacion},
            //cuando la funcion se cumpla entra a success
            success: function(data) {
              //si lo que trae data es verdadero entra al ciclo y muestra el mensaje y bloquea el boton con id(btnempleado)
                if (data == '<div id="Error">This data already exist.</div>')
                    $('#btnempleado').attr('disabled','disabled');
                  //si lo que trae data no es verdadero abilita el boton con id(btnempleado)
                else
                    $('#btnempleado').removeAttr('disabled');
                $('#Info').fadeIn(1000).html(data);
            }
        });
    });

    $( ".titulos" ).slideUp( 300 ).delay( 1000 ).fadeIn( 400 );

    //cuando cambien de input la funcion se activa
    $('#identificacioncliente').blur(function(){
      //mientras la funcion carga nos aparecera un gif que esta en el id(cargador_empresa) y aparecera el el div con id(Info)
    $('#info').html($("#cargador_empresa").html()).fadeOut(1000);
    //declaramos una variable y le asignamos el valor que trae el input con id(identificacioncliente)
        var identificacion = $('#identificacioncliente').val();
        var token = $('#token').val();
        //metodo ajax
        $.ajax({
          //declaramos tipo de envio
            type: 'post',
            //ruta que vamos a usar
            url: '/cliente/validacion',
            headers: {'X-CSRF-TOKEN': token},
            //en data traemos lo que hay en identificacion
            data: {identificacion},
             //cuando la funcion se cumpla entra a success
            success: function(data) {
               //si lo que trae data es verdadero entra al ciclo y muestra el mensaje y bloquea el boton con id(btncliente)
                if (data == '<div id="errorcinco">This data already exist.</div>')
                    $('#btncliente').attr('disabled','disabled');
                  //si lo que trae data no es verdadero abilita el boton con id(btncliente)
                else
                    $('#btncliente').removeAttr('disabled');
                $('#info').fadeIn(1000).html(data);
            }
        });
    });
//validacion de email que no exista
//cuando cambien de input la funcion se activa
    $('#email').blur(function(){
      //mientras la funcion carga nos aparecera un gif que esta en el id(cargador_empresa) y aparecera el el div con id(InfoEmail)
    $('#InfoEmail').html($("#cargador_empresa").html()).fadeOut(1000);
    //declaramos una variable y le asignamos el valor que trae el input con id(email)
        var email = $('#email').val();
        var token = $('#token').val();
        //metodo ajax
        $.ajax({
          //declaramos tipo de envio
            type: 'post',
            //ruta que vamos a usar
            url: '/empleado/validacion',
            headers: {'X-CSRF-TOKEN': token},
             //en data traemos lo que hay en email
            data: {email},
            //cuando la funcion se cumpla entra a success
            success: function(data) {
              //si lo que trae data es verdadero entra al ciclo y muestra el mensaje y bloquea el boton con id(btnempleado)
                if (data == '<div id="Error">This data already exist.</div>')
                    $('#btnempleado').attr('disabled','disabled');
                   //si lo que trae data no es verdadero abilita el boton con id(btnempleado)
                else
                    $('#btnempleado').removeAttr('disabled');
                $('#InfoEmail').fadeIn(1000).html(data);
            }
        });
    });
//validar Emails que sea tipo email
//al escribir se activa
      $('.keyup-email').keyup(function() {
       $('span.error-keyup-7').remove();
        var inputVal = $(this).val();
        //se declara una varible y se define los caracteres permitidos
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        //si la validacione es correcta entra al ciclo en este caso si lo que esta en la variable(emailReg) es diferente al valor que tiene entra al ciclo y muestra un mensaje de error
        if(!emailReg.test(inputVal)) {
        document.getElementById('Info_email').innerHTML = ('<span class="error error-keyup-7"><div id="Error">Mail format is incorrect</div></span>');
        }
      });
//cuando cambien de input la funcion se activa
    $('#emailcliente').blur(function(){
        //mientras la funcion carga nos aparecera un gif que esta en el id(cargador_empresa) y aparecera el el div con id(infoema)
    $('#infoema').html($("#cargador_empresa").html()).fadeOut(1000);
    //declaramos una variable y le asignamos el valor que trae el input con id(emailcliente)
        var email = $('#emailcliente').val();
        var token = $('#token').val();
         //metodo ajax
        $.ajax({
          //declaramos tipo de envio
            type: 'post',
            //ruta que vamos a usar
            url: '/cliente/validacion',
            headers: {'X-CSRF-TOKEN': token},
            //en data traemos lo que hay en email
            data: {email},
             //cuando la funcion se cumpla entra a success
            success: function(data) {
              //si lo que trae data es verdadero entra al ciclo y muestra el mensaje y bloquea el boton con id(btncliente)
                if (data == '<div id="errorcinco">This data already exist.</div>')
                    $('#btncliente').attr('disabled','disabled');
                   //si lo que trae data no es verdadero abilita el boton con id(btncliente)
                else
                    $('#btncliente').removeAttr('disabled');
                $('#infoema').fadeIn(1000).html(data);
            }
        });
    });
    //funcion para buscar en tiempo real
  (function ($) {
        $('#search').keyup(function () {
            var rex = new RegExp($(this).val(), 'i');
            $('.buscar tr').hide();
            $('.buscar tr').filter(function () {
              return rex.test($(this).text());
            }).show();
        })
    }(jQuery));

  //validacion de fecha
  //almacenamos la validacion en el input con id (#fecha_inicio)
    $("#fecha_inicio").datepicker({
      //se declara formato de fecha
      dateFormat: "yy/mm/dd",
      defaultDate: "+1w",
      changeMonth: true,
      //declaramos que muestre de a un mes
      numberOfMonths: 1,
      minDate: 0 });
});



//funcion para valla a la parte de arriba del formulario
function irarriba(){
$('html, body').animate({scrollTop:0}, 300);
}
//VALIDACION DE CARGA MASIVA
function comprueba_extension(formulario, archivo) {
  //almacenamos en un array las extenciones permitidas 
   extensiones_permitidas = new Array(".csv"); 
   //mierror = ""; 
   if (!archivo) { 
      //Si no tengo archivo, es que no se ha seleccionado un archivo en el formulario 
       // mierror = "You have not selected any file."; 
        swal({   title: "Error!",   text: "You have not selected any file.",   type: "error",   confirmButtonText: "Okey" });
   }else{ 
      //recupero la extensión de este nombre de archivo 
      extension = (archivo.substring(archivo.lastIndexOf("."))).toLowerCase(); 
      //alert (extension); 
      //compruebo si la extensión está entre las permitidas 
      permitida = false; 
      for (var i = 0; i < extensiones_permitidas.length; i++) { 
         if (extensiones_permitidas[i] == extension) { 
         permitida = true; 
         break; 
         } 
      } 
      if (!permitida) { 
         //mierror = "Check the extension files to upload. \nYou can only upload files with extensions: " + extensiones_permitidas.join(); 
         swal({   title: "Error!",   text: "Check the extension files to upload. \nYou can only upload files with extensions: " + extensiones_permitidas.join(),   type: "error",   confirmButtonText: "Okey" });
        }else{ 
          //submito! 
         swal({   title: "Good!",   text: "Correct file.",   type: "success",   confirmButtonText: "Okey" });
         //alert ("Correct file."); 
         formulario.submit(); 
         return 1; 
        } 
   } 
   //si estoy aqui es que no se ha podido submitir 
   //alert (mierror); 
   return 0; 
}
//VALIDACION DE IMAGEN DE EMPLEADO
function extension_imagen(formulario,imagen_foto) { 
  //almacenamos en un array las extenciones permitidas 
   extensiones_permitidas = new Array(".jpg",".gif",".png"); 
   //mierror = ""; 
   if (!imagen_foto) { 
      //Si no tengo archivo, es que no se ha seleccionado un archivo en el formulario 
       // mierror = "You have not selected any file."; 
        swal({   title: "Error!",   text: "You have not selected any file.",   type: "error",   confirmButtonText: "Okey" });
   }else{ 
      //recupero la extensión de este nombre de archivo 
      extension = (imagen_foto.substring(imagen_foto.lastIndexOf("."))).toLowerCase(); 
      //alert (extension); 
      //compruebo si la extensión está entre las permitidas 
      permitida = false; 
      for (var i = 0; i < extensiones_permitidas.length; i++) { 
         if (extensiones_permitidas[i] == extension) { 
         permitida = true; 
         break; 
         } 
      } 
      if (!permitida) { 
         //mierror = "Check the extension files to upload. \nYou can only upload files with extensions: " + extensiones_permitidas.join(); 
         swal({   title: "Error!",   text: "Check the extension files to upload. \nYou can only upload files with extensions: " + extensiones_permitidas.join(),   type: "error",   confirmButtonText: "Okey" });
        }else{ 
          //submito! 
         swal({   title: "Good!",   text: "Correct file.",   type: "success",   confirmButtonText: "Okey" });
         //alert ("Correct file."); 
         formulario.submit(); 
         return 1; 
        } 
   } 
   //si estoy aqui es que no se ha podido submitir 
   //alert (mierror); 
   return 0; 
}

//VALIDACIONN DE INPUT TIPO TEXT
//se activa al escribir
function soloLetras(e) {
    key = e.keyCode || e.which;
    tecla = String.fromCharCode(key).toString();
    //Se define todo el abecedario que se quiere que se muestre.
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    //Es la validación del KeyCodes, que teclas recibe el campo de texto.
    especiales = [8, 37, 39, 46, 6]; 
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            return true;
            break;
        }
    }
    //si la validacion se cumple entra al ciclo en este caso si lo almacenado en letras en diferente entra al ciclo y muestra un mensaje
    if(letras.indexOf(tecla) == -1 && !tecla_especial){
     document.getElementById('Infoletras').innerHTML = "<div id='Error'>Only letters are allowed</div>";
     return false;
   }
   //si no se cumple se desaparece el error
   document.getElementById('Error').style.display='none';
 }

 function soloLetrastres(r) {
    key = r.keyCode || r.which;
    tecla = String.fromCharCode(key).toString();
    //Se define todo el abecedario que se quiere que se muestre.
    letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    //Es la validación del KeyCodes, que teclas recibe el campo de texto.
    especiales = [8, 37, 39, 46, 6]; 
    tecla_especial = false
    for(var i in especiales) {
        if(key == especiales[i]) {
            return true;
            break;
        }
    }
    //si la validacion se cumple entra al ciclo en este caso si lo almacenado en letras en diferente entra al ciclo y muestra un mensaje
    if(letras.indexOf(tecla) == -1 && !tecla_especial){
     document.getElementById('informacion').innerHTML = "<div id='Error'>Only letters are allowed</div>";
     return false;
   }
   //si no se cumple se desaparece el error
   document.getElementById('Error').style.display='none';
 }

    function soloLetrasdos(a) {
        key = a.keyCode || a.which;
        tecla = String.fromCharCode(key).toString();
        //Se define todo el abecedario que se quiere que se muestre.
        letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
         //Es la validación del KeyCodes, que teclas recibe el campo de texto.
        especiales = [8, 37, 39, 46, 6];

        tecla_especial = false
        for(var i in especiales) {
            if(key == especiales[i]) {
                return true;
                break;
            }
        }
        //si la validacion se cumple entra al ciclo en este caso si lo almacenado en letras en diferente entra al ciclo y muestra un mensaje
        if(letras.indexOf(tecla) == -1 && !tecla_especial){
         document.getElementById('Info_letdos').innerHTML = "<div id='Errordos'>Only letters are allowed</div>";
         return false;
       }
       //si no se cumple se desaparece el error
       document.getElementById('Errordos').style.display='none';
     }
//VALIDACION DE input number
 function SoloNumeros(evt){
  //asignamos el valor de la tecla a keynum
      if(window.event){
         //IE
        keynum = evt.keyCode;
      }
      else{
        //FF
        keynum = evt.which; 
      } 
      //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
      if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
        document.getElementById('Errorcuatro').style.display='none';
        return true;
      }
      //si la validacion no se cumple muestra un mensaje de error
      else{
        document.getElementById('Info_num').innerHTML = "<div id='Errorcuatro'>Only numbers are allowed</div>";
        return false;
      }
   }
   function SoloNumerosdos(evt){
    //asignamos el valor de la tecla a keynum
      if(window.event){
        //IE
        keynum = evt.keyCode; 
      }
      else{
         //FF
        keynum = evt.which;
      } 
      //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
      if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
        document.getElementById('Errortres').style.display='none';
        return true;
      }
      else{
        //si la validacion no se cumple muestra un mensaje de error
        document.getElementById('Info_numdos').innerHTML = "<div id='Errortres'>Only numbers are allowed</div>";
        return false;
      }
   }
   //validacion para que la primera letra de cada palabra sea matuscula
   function validar(v,solicitar){
      // Admitir solo letras
      tecla = (document.all) ? v.keyCode : v.which;
      if (tecla==8) return true;
      patron =/[\D\s]/;
      te = String.fromCharCode(tecla);
      if (!patron.test(te)) return false;
      // No amitir espacios iniciales y convertir 1ª letra a mayúscula
      txt = solicitar.value;
      if(txt.length==0 && te==' ') return false;
      if (txt.length==0 || txt.substr(txt.length-1,1)==' ') {
        solicitar.value = txt+te.toUpperCase();
        return false;
    } 
  } 

//VALIDACION DE FECHA
   $( function(){
    //declaramos el formato de la fecha
      var dateFormat = "yy/mm/dd",
      //almacenamos en fecha_inicio lo que traemos en el input con id(fecha_inicio)
      fecha_inicio = $("#fecha_inicio")
      .datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1
      })
      .on( "change", function() {
        fecha_fin.datepicker("option","minDate",getDate(this));
      }),
      //almacenamos en fecha_fin lo que traemos en el input con id(fecha_fin)
      fecha_fin = $("#fecha_fin").datepicker({
        defaultDate: "+1w",
        changeMonth: true,
        numberOfMonths: 1,
        //declaramos el formato de la fecha
        dateFormat: "yy/mm/dd"
      })
     

      function getDate(element){
        var date;
        try{
          date= $.datepicker.parseDate( dateFormat, element.value);
        }catch(error){
          date = null;
        }
        return date;
      }

   });

//---------FUNCIONES PARA ENVIAR CORREOS MASIVOS--------
//---------------------------------------------
//se activa cuando se da click en el input submit del formulario de formarchivo
$(document).on("submit",".formarchivo",function(e){
        e.preventDefault();
        var formu=$(this);
        var nombreform=$(this).attr("id");
        var rs=false; //leccion 10
        var seccion_sel=  $("#seccion_seleccionada").val();
        if(nombreform=="f_enviar_correo" ){ 
          //almacenamos la url en la variable (miurl)
            var miurl="enviar_correo";  
            var divresul="contenido_principal";   
          }
        //información del formulario
        var formData = new FormData($("#"+nombreform+"")[0]);
        //hacemos la petición ajax   
        $.ajax({
          //usamos la url almacenada en la variable(miurl)
            url: miurl,  
            type: 'POST',
            // Form data
            //datos del formulario
            data: formData,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $("#"+divresul+"").html(data);
                 if(rs ){
                         $('#'+nombreform+'').trigger("reset");
                         mostrarseccion(seccion_sel);
                        }             
            },
            //si ha ocurrido un error
            error: function(data){
              swal({   title: "Error!",   text: "An error has occurred, reload thse page.",   type: "error",   confirmButtonText: "Okey" });
               //alert("ha ocurrido un error") ;
                
            }
        });
//metodo para ir a la parte de arriba de la pagina
irarriba();

});
 //la funcion se activa cuando se adjunta un archivo
$(document).on("change",".email_archivo",function(e){
    //almacenamos la url en la variable (miurl)
    var miurl="cargar_archivo_correo";
   // var fileup=$("#file").val();
    var divresul="texto_notificacion";

    var data = new FormData();
    data.append('file', $('#file')[0].files[0] );

  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('#_token').val()
        }
    });
     $.ajax({
      //usamos la url almacenada en la variable(miurl)
            url: miurl,  
            type: 'POST',
            // Form data
            //datos del formulario
            data: data,
            //necesario para subir archivos via ajax
            cache: false,
            contentType: false,
            processData: false,
            //mientras enviamos el archivo
            beforeSend: function(){
              $('#btncorreo').attr('disabled','disabled');
              $("#"+divresul+"").html($("#cargador_empresa").html());                
            },
            //una vez finalizado correctamente
            success: function(data){
              $('#btncorreo').removeAttr('disabled');
              var codigo='<div class="mailbox-attachment-info"><a href="#" class="mailbox-attachment-name"><i class="glyphicon glyphicon-paperclip"></i>'+ data +'</a><span class="mailbox-attachment-size"> </span></div>';
              $("#"+divresul+"").html(codigo);
            },
            //si ha ocurrido un error
            error: function(data){
               $("#"+divresul+"").html(data);
            }
        });

});
