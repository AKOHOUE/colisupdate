@extends('front.layouts.app')

@section('content')
    <!-- Banner Area -->
        <section>
          <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h4 class="header center teal-text text-lighten-2">Suivre une commande en un clic. Commencer par saisir le numéro de suivi.
</h1>
        <div class="row center">
    <form class="col s12">
     <div class="row">
        <div class="input-field col s6">
          <input id="numero" type="text" name="numero" class="validate">
          <label for="numero">Saisissez le numéro de suivie de la commande</label>
        </div>
        <div class="input-field col s6">
            <button class="btn waves-effect waves-light" type="submit" name="action">Continuer
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>

    </form>
        <div class="row center">
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="/assets/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>



  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Expédition en toute sécurité</h5>

        </div>
      </div>
    </div>
    <div class="parallax"><img src="/assets/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

 </section>

@endsection
