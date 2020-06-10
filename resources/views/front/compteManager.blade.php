@extends('front.layouts.app')

@section('stylesheets')
    <style type="text/css">
        p{
            font-size: 18px;
            padding: 7px;
        }
        
        .well2 {
            min-height: 20px;
            color: white;
            padding: 19px;
            margin-bottom: 20px;
            background-color: #ce0027;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
            box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
        }
    </style>
@endsection

@section('content')
    <!-- Banner Area --> 
    <section class="banner_area">
    	<div class="container">
    		<h2>Gérer son compte</h2>
    		<ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Accueil</a></li>     
                <li><a href="#" class="active">Gérer son compte</a></li> 
            </ol>
    	</div>
    </section>

    <!--================Our About Area =================-->
    <section class="contact_us_area">
        <div class="container">
            <div class="row" style="padding: 35px">
				<div class="col-xl-12">
                    <div class="tittle la" style="margin-bottom: 30px">
                        <h2>Mon Compte</span></h2>
                    </div>
                    <div class="row wrap">
                        <div class="col-sm-3 well" style="margin-right: 20px; padding: 20px">
                            <div class="row"><div style="margin: 30px"><img src="{{ asset('') }}assets/front/images/avatar.png"></div></div>
                            <p style="color: #606060">Nom: {{$user->nom}}</p>
                            <p style="color: #606060">Prénoms: {{$user->prenom}}</p>
                            <p style="color: #606060">Email: {{$user->email}}</p>
                            <p style="color: #606060">Pays: {{$user->pays}}</p>
                            @if($user->iban == '' OR $user->bicswift == '')
                             <div class="row well2">
                                    <div><h3>  <br> Compte non activé. Veuillez contacter Social Invest pour finaliser l'activation de votre compte.</h3></div>
                                </div>
                                @endif
                        </div>
                        <div class="col-sm-8 well">
                            @if(!$user->montantCompte)
                                <div class="row well2">
                                    <div><h3>Votre solde actuel est de: {{$user->montantCompte}} {{$user->devise}} <br> Solde critique . </h3></div>
                                </div>
                            @else
                                <div class="row well2" style="background-color: #2759ab">
                                    <div><h3>Votre solde actuel est de: {{$user->montantCompte}} {{$user->devise}}s</h3></div>
                                </div>
                            @endif
                            <legend>Informations comptes</legend>
                            <div>
                                <p>Nom: {{$user->nom}}</p>
                                <p>Prénoms: {{$user->prenom}}</p>
                                <p>Téléphone: {{$user->telephone}}</p>
                                <p>Code Postal: {{$user->codePostal}}</p>
                                <p>Nom de la banque: Social Invest</p>
                                <p>IBAN: {{$user->iban ? $user->iban : ''}}</p>
                                <p>SWIFT: {{$user->bicswift ? $user->bicswift : ''}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row text-center justify-content-center">
                    <col-lg-2>
                        <a href="{{url('virement')}}" class="btn green_submit_btn form-control" style="margin-bottom: 30px; color: #fff; background-color: #449d44">Faire un virement</a>
                    </col-lg-2>
                    <col-lg-2>
                        <a href="{{url('transfert')}}" class="btn green_submit_btn form-control" style="margin-bottom: 30px; color: #fff; background-color: #449d44">Faire un dépôt</a>
                    </col-lg-2>
                </div>
            </div>
        </div>
    </section>
@endsection
