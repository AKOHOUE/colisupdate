<!-- Dropdown Structure -->
<div class="navbar-fixed">
  <nav class=" navbar-fixed" role="navigation">
    <div class="nav-wrapper container" class=" navbar-fixed">
      <a id="logo-container" href="" class="brand-logo" style="color:white">Globally Express</a>
      <ul class="right hide-on-med-and-down">
      @guest
         <li><a   href="{{route('front.login')}}" style="color:white">Se Connecter</a></li>

    @if (Route::has('register'))

      <li><a   href="{{route('front.register')}}" style="color:white">Devenir client</a></li>

    @endif
@else

        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->name }} <span class="caret"></span>
        </a>
    <a   href="{{route('front.logout')}}" style="color:white">Déconnexion</a>

    </li>
@endguest
      <li><a href="{{route('front.suivisform')}}" style="color:white">Suivre une commande </a></li>
      <li><a href="{{route('front.suivisform')}}" style="color:white">Expédier</a></li>
      <!-- Dropdown Trigger -->
      <li><a   href="{{route('front.register')}}" style="color:white">Devenir client</a></li>

      </ul>

      <ul id="nav-mobile" class="sidenav">
      <li><a href="'front.suivisform')" style="color:white">Suivre une commande </a></li>
      <li><a href="{{route('front.suivisform')}}" style="color:white">Expédier</a></li>
      <!-- Dropdown Trigger -->
      <li><a   href="{{route('front.register')}}" style="color:white">Devenir client</a></li>
      </ul>
      <a href="{{route('front.suivisform')}}" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">toc</i></a>
    </div>
  </nav>
</div>

