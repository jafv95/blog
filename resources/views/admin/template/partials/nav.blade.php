<nav id="nav" class="navbar navbar-fixed-top navbar-default">
  <div class="container">
    <div class="navbar-header">

        <!-- Collapsed Hamburger -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Branding Image -->
        <a class="navbar-brand" href="{{ url('/') }}">
            CodigoJFV
        </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <!-- Left Side Of Navbar -->
        <ul class="nav navbar-nav">
            @if(Auth::user())
                @if(Auth::user()->admin())
                    <li><a href="{{ url('/home') }}">Home</a></li>                    
                    <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
                    <li><a href="{{ route('admin.categories.index') }}">Categorias</a></li>
                    <li><a href="{{ route('admin.tags.index') }}">Tags</a></li>
                    <li><a href="{{ route('admin.articles.index') }}">Articulos</a></li>
                    <li><a href="{{ route('admin.images.index') }}">Imagenes</a></li>
                @endif
            @endif
        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a href="{{ url('/login') }}">Login</a></li>
                <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div>
  </div><!-- /.container-fluid -->
</nav>