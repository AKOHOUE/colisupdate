@extends('front.layouts.app')

@section('content')
    <!-- Banner Area -->
        <section>
          <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Globally Express</h1>
        <div class="row center">
          <h5 class="header col s12 light">Suivez vos expéditions Globally Express
            Le moyen le plus rapide de vérifier le statut de votre expédition. Vous n’avez plus besoin d'appeler le Service Clients - Notre suivi en ligne vous donne en temps réel, les détails de l’acheminement de votre envoi à travers le réseau Globqlly Express,</h5>
        </div>
        <div class="row center">
          <a href=" " id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Suivre une commande en un clic !</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="/assets/background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"> </h2>
            <h5 class="center">Service d'aide </h5>

            <p class="light"> .</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"> </h2>
            <h5 class="center">Plannifier un envoi</h5>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"> </h2>
            <h5 class="center">Globally Express</h5>

          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">Expédition en toute sécurité</h5>
          <div  class="container">
<form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input   name="origine" id="first_name" type="text" class="validate">
          <label for="origine">Adresse complète</label>
        </div>
        <div class="input-field col s6">
          <input id="destination" type="text" name="destination" class="validate">
          <label for="destination">Destination/Destinataire</label>
        </div>
      </div>
{{--       <div class="row">
        <div class="input-field col s12">
          <input id="" name="numero" type="text" class="validate">
          <label for="">Numéro de colis</label>
        </div>
      </div> --}}
      <div class="row">
        <div class="input-field col s12">
          <input    id="" name="lieuCurrent" type="text" class="validate">
          <label for="">Lieu actuel du colis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="heure" type="text" name="heure" class="validate">
          <label for="Horaire">Horaire</label>
        </div>
      </div>
            <div class="row">
        <div class="input-field col s6">
          <input   name="piece" id="piece" type="text" class="validate">
          <label for="piece">Pièce</label>
        </div>
        <div class="input-field col s6">
          <input id="poste" type="text" name="poste" class="validate">
          <label for="poste">Poste</label>
        </div>
      </div>
       <button class="btn waves-effect waves-light" type="submit" name="action">Envoyer
            <i class="material-icons right">send</i>
      </button>

    </form>
    </div>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="/assets/background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

 </section>

@endsection
