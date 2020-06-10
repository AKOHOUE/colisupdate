<!-- Dropdown Structure -->
<div class="navbar-fixed">
  <nav class=" navbar-fixed" role="navigation">
    <div class="nav-wrapper container" class=" navbar-fixed">
      <a id="logo-container" href="" class="brand-logo" style="color:white">Globally Express</a>
      <ul class="right hide-on-med-and-down">
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

