  <header class="main-header">

    <nav class="navbar navbar-static-top">


      <div class="container-fluid">

         
        
        <div class="navbar-header">
          <a href="/" class="navbar-brand"><b>MCV</b>Blog</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <i class="fa fa-bars"></i>
        </button>


        </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li class="active"><a href="/" class="fa fa-home" style="font-size: 30px"></a></li>
        <li>
          <!--BUSCADOR -->
          {!! Form::open(["/admin/articles", 'method' => 'GET', 'class' => 'navbar-form pull-left']) !!}

              <div class="input-group has-feedback">
                {!! Form::text('title',null, ['class' => 'form-control', 'placeholder' => 'Buscar Articulo..', 'aria-describedby' =>'search'])!!}
                  <span class="fa fa-search form-control-feedback"></span>      
              </div>

          {!! Form::close() !!}

          <!--FIN DEL BUSCADOR -->
        </li>
      </ul>

      <ul class="nav navbar-nav">
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        
        <!-- Authentication Links -->
          @guest
              <li><a class="nav-link" href="{{ route('login') }}">{{ __('Acceder ') }}</a></li>
          @else
          <li><a href="/admin/index">Administrador</a></li>
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

</div>
      </div>
    </nav>
  </header>