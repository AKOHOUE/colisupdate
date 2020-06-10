@extends('front.layouts.app')



@section('content')
  <div id="index-banner" class="parallax-container">
    <div class="section no-pad-bot">
      <div class="container">
        <br><br>
        <h1 class="header center teal-text text-lighten-2">Parallax Template</h1>
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
        <div class="row center">
          <a href="http://materializecss.com/getting-started.html" id="download-button" class="btn-large waves-effect waves-light teal lighten-1">Get Started</a>
        </div>
        <br><br>

      </div>
    </div>
    <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Speeds up development</h5>

            <p class="light">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">group</i></h2>
            <h5 class="center">User Experience Focused</h5>

            <p class="light">By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Contact Us</h4>
          <p class="left-align light">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque id nunc nec volutpat. Etiam pellentesque tristique arcu, non consequat magna fermentum ac. Cras ut ultricies eros. Maecenas eros justo, ullamcorper a sapien id, viverra ultrices eros. Morbi sem neque, posuere et pretium eget, bibendum sollicitudin lacus. Aliquam eleifend sollicitudin diam, eu mattis nisl maximus sed. Nulla imperdiet semper molestie. Morbi massa odio, condimentum sed ipsum ac, gravida ultrices erat. Nullam eget dignissim mauris, non tristique erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background3.jpg" alt="Unsplashed background img 3"></div>
  </div>
    <!--================Banner Area =================-->
    <!-- Banner Area -->
    <section class="banner_area">
    	<div class="container">
    		<h2>Expédition</h2>
    		<ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Accueil</a></li>
                <li><a href="#" class="active">Expédier/Plannifier un envoi</a></li>
            </ol>
    	</div>
    </section>

    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
		<div class="row" style="padding: 35px">
				<div class="col-xl-12">
					<div class="tittle la">
						<h2 style="text-align:center">Expédier/Plannifier un envoi</span></h2>
					</div>
                    <div class="row wrap">

    <form class="col s12">
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" name="origine" id="first_name" type="text" class="validate">
          <label for="first_name">Adresse complète/ Origine de la commande</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="destination" class="validate">
          <label for="last_name">Destination/Destinataire</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="" name="numero" type="text" class="validate">
          <label for="">Numéro de colis</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input disabled value="I am not editable" id="" name="lieuCurrent" type="text" class="validate">
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
          <input placeholder="Placeholder" name="piece" id="piece" type="text" class="validate">
          <label for="piece">Pièce</label>
        </div>
        <div class="input-field col s6">
          <input id="poste" type="text" name="poste" class="validate">
          <label for="poste">Poste</label>
        </div>
      </div>
           <div class="input-field">
          <input id="submit" type="submit" name="" class="validate">
        </div>
    </form>
  </div>


						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
@endsection
@endsection
