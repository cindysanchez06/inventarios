<!DOCTYPE html>
<html lang="en">
    <head>
        <!--Style -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">  
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">  
         <!--Java Scrip -->        
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/scripts.js') }}"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>

        <!--librerias de mensajes con javascrip -->
        <script src="{{ asset('sweetalert/dist/sweetalert.min.js') }}"></script> 
        <link rel="stylesheet" type="text/css" href="{{ asset('sweetalert/dist/sweetalert.css') }}">
        
        <title>SPI</title>

        
    </head>
    <body id="app-layout"> 
        @include('layouts/menuPrincipal')
        <div class="container">
            <div class="row">
                @yield('content')
            </div>
        </div>
        <footer id="footer" class="foot">
            SISTEMA PARA INVENTARIOS
        </footer>
    </body>
</html>
