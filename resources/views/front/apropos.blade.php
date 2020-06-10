@extends('front.layouts.app')

@section('content')
    <!-- Banner Area --> 
    <section class="banner_area">
    	<div class="container">
    		<h2>A Propos</h2>
    		<ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Accueil</a></li>     
                <li><a href="#" class="active">A Propos</a></li> 
            </ol>
    	</div>
    </section>

    <!--================Our About Area =================-->
    <section class="our_about_area">
        <div class="container">
            <div class="row" style="padding: 35px">
                <div class="tittle la" style="margin-bottom: 15px">
                    <h2>Social Invest</span></h2>
                </div>
                <div class="row">
                    <div class="col-md-7">
                       

                        <p style="text-align: justify">UNE BANQUE A VOTRE SERVICE

La Banque <mark>Social Invest</mark class="tittle la">s’engage à offrir un service de haute qualité et nous accordons une très grande importance à vos besoins et à votre relation d’affaires avec nous. Votre satisfaction est notre objectif ! Nous sommes une banque complète, claire et accessible. Mais aussi une banque foncièrement opposée au jargon technique. Chez nous, tout est simple et le plus évident possible. Social Invest lance une plateforme digitale pour conseiller et accompagner le client dans ses démarches de travaux de rénovation.

Nous sommes au cœur des projets de nos 98 millions de clients dans 189 pays. Nous accompagnons par nos métiers tous leurs projets d'investissement et de protection. Ceux des groupes multinationaux comme des PME, ceux des agriculteurs et des artisans, ceux des associations et des collectivités, ceux des particuliers et de leurs familles. Nous cultivons avec eux une relation de confiance, franche et loyale.

.</p>

                        <p style="text-align: justify">Nous construisons au quotidien une nouvelle expérience de la banque, 100% digitale et 100% humaine. Pour vous, nous cultivons la transparence et la confiance depuis toujours. Pour vous, nous préparons l'avenir dans la même chaîne thématique..</p>
                    
                 <h2 class="tittle la">Social Invest!,</h2>
                  <p>
la banque en ligne innovante à portée de main !
COMPTES COURANT
COMPTE JOINT
CARTES BANCAIRES
SERVICES BANCAIRES
Vous avez demandé une banque 100% digitale, accessible et disponible ? Avec ses services essentiels et personnalisés, Social Invest ! s'adapte à votre rythme !
Vivez votre argent sans contraintes et gérez vos comptes bancaires, crédits, assurances, épargne et placements boursiers en ligne, en toute simplicité et à des tarifs très avantageux.</p>   
                    
                    </div>
                    <div class="col-md-5">
                        <img src="/assets/front/images/b3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--================Manager Area =================-->
    <section class="manager_area">
        <div class="container">
            <div class="row" style="margin-bottom: 40px">
                <div class="col-md-5">
                    <div class="manager_image">
                        <img src="/assets/front/images/mission.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="our_about_left_content">
                        <div class="section_title" style="margin-bottom: 15px">
                            <h2>Un mot du Directeur Général</h2>
                        </div>
                        <p style="text-align: justify">Vous êtes entrepreneur, retrouvez ici du contenu utile pour gérer, développer et pérenniser votre activité en France et à l’international. Financer votre développement, booster votre business grâce au e-commerce, vous lancer à l’international, protéger vos salariés et votre entreprise, vous développer par croissance externe, passer le relais, motiver vos équipes, … autant de sujets qui vous concernent pour faire grandir votre entreprise. Témoignages, solutions, articles, actualités, événements, … l’essentiel pour entreprendre. <br>
                        Social Invest a été créée pour financer le développement des entreprises. Il me semble essentiel de cultiver l’esprit pionnier que nous partageons depuis toujours avec nos clients entrepreneurs et particuliers pour leur divees problèmes..</p>
                        <h3 style="margin: 20px 0px 50px 0px"><strong>Brunel J. KIFLY<br>
                        Directeur général</strong></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
