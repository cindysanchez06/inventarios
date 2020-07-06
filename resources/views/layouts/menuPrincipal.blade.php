     <!-- Fixed navbar -->
     <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url('home') }}">SPI</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="">
              <a href="{{ route('home') }}" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-briefcase"></i> Inventarios </a>
            </li>
            @if(isset(Auth::user()->rol_id) && Auth::user()->rol_id == 1)
              <li class="dropdown">
                <a href="{{route('usuario.index') }}" role="button" aria-haspopup="true" aria-expanded="false"><i class="glyphicon glyphicon-user"></i> Usuarios</a>
              </li>
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Registrar</a></li>
                        @else
                            <li><a>{{ Auth::user()->cargo }}</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu" style="color: black">
                                    <li><a href="{{ route('logout') }}"><i class="fa fa-btn fa-sign-out" style="color: black"></i>Salir</a></li>
                                </ul>
                            </li>
                        @endif
                    </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
