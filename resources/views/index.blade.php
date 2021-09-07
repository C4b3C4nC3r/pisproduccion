
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid"  style="">
  
    <a class="navbar-brand" href="#"> <img src="{{ asset('img/logo-laravel.png') }}" width="50" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.primicias.ec/">Noticias</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Agro Agencias 
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://agripac.com.ec/">Agripag</a></li>
            <li><a class="dropdown-item" href="http://www.ecuaquimica.com.ec/">Ecuaquimica</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Del Bayer</a></li>
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="https://www.gob.ec/mag">MAGAP</a>
        </li>
        <li class="nav-item">
          @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" class="nav-link">Tablero </a>
                @else
                    <a href="{{ route('login') }}" class="nav-link">Log in</a>
                @endauth
        @endif
        
        </li>
      </ul>
      <form action="/" class="d-flex">
        <input class="form-control me-2" type="search" name="buscar"  aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Buscar</button>
      </form>
        <!--AQUI IRIAN LOS BUSCADORES-->
    </div>
  </div>
</nav>