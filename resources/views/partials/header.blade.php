<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route("home") }}">DC LOGO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ Route::currentRouteName() == 'home' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route("home") }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'comixes.index' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route("comixes.index") }}">Comix <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item {{ Route::currentRouteName() == 'comixes.create' ? 'active' : '' }}">
              <a class="nav-link" href="{{ route("comixes.create") }}">Add comic <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
      </nav>
</header>