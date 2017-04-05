<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('home')}}"><img src="{{url('img/logo_blanco.png')}}" alt="logo"></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                    <li><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="#">Productos</a></li>
                    <li><a href="{{route('auth/logout')}}">Cerrar Sesión</a></li>
                @else
                    <li><a href="{{route('inicio')}}">Inicio</a></li>
                    <li><a href="{{route('home')}}">Iniciar Sesión</a></li>
                @endif

            </ul>
        </div>
    </div>
</nav>