<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/loginstyle.css') }}"> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="{{ asset('js/scriptslogin.js') }}"></script>
        <title>SPI</title>
    </head>
    <body>
    <hr>
        <video id="video-background"  autoplay loop muted src="{{ asset('media/videodos.mp4') }}"></video>
        <div class="titulos">
            <div class="titulo">
                <h2>SISISTEMA PARA INVENTARIOS</h2> 
                <!--pondremos un mensaje de error por si hubo algun inconveniente diligenciando algun formulario-->
                @if ($errors->has('email')) 
                    <div class="alert alert-danger text-center"><strong>Error!</strong>
                        {{ $errors->first('email') }} 
                    </div>
                @endif
                @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                <a class="btn  boton abrir cerrarfondo" href="javascription:void(0)}"><span><i class="glyphicon glyphicon-log-in"></i></span> Iniciar Sesion</a>
            </div>
        </div>

        <div id="foo" class="foo">
            <div id="content" class="content">
                
                <div class="modal-header">
                    <button type="button" class="close cerrarlogin" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                <!--pondremos un mensaje de error por si hubo algun inconveniente diligenciando algun formulario-->
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
              <!--accedemos a la ruta que va al metodo que usaremos para que nuestro boton ejecute la accion-->            
                    <form class="contact_form" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <input type="email" class="form-control keyup-email" name="email" placeholder="E-mail" value="{{ old('email') }}" required>
                            <!--pondremos un mensaje de error por si hubo algun inconveniente diligenciando algun formulario-->
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                          <div id="Info_email"></div>
                          <div id="infologin"></div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <input type="password" class="form-control" name="password" placeholder="******" required>
                              <!--pondremos un mensaje de error por si hubo algun inconveniente diligenciando algun formulario-->
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn botondos btn-block">
                                <i class="glyphicon glyphicon-log-in"></i> Iniciar Sesion
                            </button>
                        </div>
                        <!--cerramos el formulario-->
                    </form>          
                </div> 
            </div>
        </div>
        <div class="pr-wrap">
            <div class="pass-reset">
                
                <div class="modal-header">
                    <button type="button" class="close cerrarpass" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h3 class="panel-title">Reset Password</h3>
                </div>
                <div class="modal-body">
                    <!--accedemos a la ruta que va al metodo que usaremos para que nuestro boton ejecute la accion-->
                    <form class="contact_form" role="form" method="POST" action="{{ url('/password/email') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                                <input type="email" placeholder="E-mail" class="form-control keyup-emaildos" name="email" value="{{ old('email') }}" required>
                            <!--pondremos un mensaje de error por si hubo algun inconveniente diligenciando algun formulario-->
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div id="Info_emaildos"></div>
                        </div>

                        <div class="form-group">
                                <button type="submit" class="btn btn-success btn-block">
                                    <i class="glyphicon glyphicon-envelope"></i> Send Password Reset Link
                                </button>
                            </div>
                        
                    <!--cerramos el formulario-->
                    </form>
                </div>
            </div> 
        </div>
    </body>
</html>
