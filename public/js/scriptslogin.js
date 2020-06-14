
$(document).ready(function() {
    $( ".titulos" ).slideUp( 300 ).delay( 1000 ).fadeIn( 400 );

    $('.cerrarfondo').click(function(event) {
      $(".titulo").removeClass("show-pass-titulo");
    });

    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.cerrarpass').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
    $('.abrir').click(function(event) {
      $(".foo").toggleClass("show-pass-content");
      $( ".titulos" ).slideUp( 300 ).remove( 1000 ).fadeIn( 400 );
    }); 
    
    $('.cerrarlogin').click(function(event) {
      $(".foo").removeClass("show-pass-content");
      $( ".titulos" ).slideUp( 1000 ).delay( 100 ).fadeIn( 1000 );
    });


    //validar Emails que sea tipo email del modal de logearse
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

    //validar Emails que sea tipo email del modal de recuperar contraseña
    //al escribir se activa
       $('.keyup-emaildos').keyup(function() {
       $('span.error-keyup-7').remove();
        var inputVal = $(this).val();
        //se declara una varible y se define los caracteres permitidos
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        //si la validacione es correcta entra al ciclo en este caso si lo que esta en la variable(emailReg) es diferente al valor que tiene entra al ciclo y muestra un mensaje de error
        if(!emailReg.test(inputVal)) {
        document.getElementById('Info_emaildos').innerHTML = ('<span class="error error-keyup-7"><div id="errordos">Mail format is incorrect</div></span>');
        }
      });
});