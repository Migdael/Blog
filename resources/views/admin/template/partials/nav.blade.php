<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MCV
        {{-- <img alt="Brand" src="/imagenes/marca.jpg" style="width: 40px; height: 40px"> --}}
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

@if (Auth::user())
  

      <ul class="nav navbar-nav">
        <li class="active"><a href="/admin/index" class="fa fa-home" style="font-size: 30px"></a></li>
        
        @if (Auth::user()->admin())
          <li><a href="/admin/users"><i class="fa fa-user" cla></i> Usuarios</a></li>
        @endif

        <li><a href="/admin/categories">Categorias</a></li>
        <li><a href="/admin/articles">Articulos</a></li>
        <li><a href="/admin/images">Imagenes</a></li>
        <li><a href="/admin/tags">Tags</a></li>
      </ul>
@endif      
      <ul class="nav navbar-nav navbar-right">
        
        <!-- Authentication Links -->
          @guest
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('Acceder ') }}</a></li>
              <li><a class="nav-link" href="{{ route('register') }}">{{ __('Crear usuario') }}</a></li>
          @else
              <li><a href="/">Ir al fron</a></li>
              <li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                  </a>

                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item btn-outline-info" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Cesion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                        </form>
                  </div>
              </li>
          @endguest
      </ul>



                        
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> 

