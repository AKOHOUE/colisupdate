@extends('front.layouts.app')

@section('stylesheets')
	<style type="text/css">
		.contact_us_form .form-group input{
		  height: 40px;
		}

		#step1Prev, #step2Prev {
			background: #333;
		    border-color: #333;
		    color: #fff;
		    line-height: 25px;
		    width: 90px;
		    border-radius: 0px;
		    margin-right: 20px;
		}

		#step1Next, #step0Next {
		    background: #449d44;
		    border-color: #449d44;
		    line-height: 25px;
		    width: 90px;
		    border-radius: 0px;
		    margin-right: 20px;
		}

		#SaveAccount {
		    background: #369c15;
		    border-color: #369c15;
		    line-height: 25px;
		    width: 90px;
		    border-radius: 0px;
		    margin-right: 20px;
		}

		.invalid-feedback{
			color: red;
		}
	</style>
@endsection

@section('content')

    <!--================Banner Area =================-->
    <!-- Banner Area --> 
    <section class="banner_area">
    	<div class="container">
    		<h2>Emprunt</h2>
    		<ol class="breadcrumb">
                <li><a href="{{ url('/') }}">Accueil</a></li>     
                <li><a href="#" class="active">Emprunt et rembourser à votre gré !</a></li> 
            </ol>
    	</div>
    </section>

    <!--================Contact Us Area =================-->
    <section class="contact_us_area">
        <div class="container">
		<div class="row" style="padding: 35px">
				<div class="col-xl-12">
					<div class="tittle la">
						<h2 style="text-align:center">Faire un prêt</span></h2>
					</div>
                    <div class="row wrap">
					    <div class="col-md-12">
							<form id="SignupForm" action="{{ route('front.operationPost') }}" method="post" class="contact_us_form">
								@csrf
								@if (Session::has('success'))
									<script type="text/javascript">alert('Votre demande de prêt a été bien envoyée. Consultez votre mail dans les prochaines 48 heures. Nous vous contacterons afin de donner une suite a votre demande de pret. Il se peut que notre message soit dans les spams, verifiez donc.')</script>
									{{-- <strong style="background: green; border-radius: 40px; padding: 5px 15px 7px 15px; color: white; font-size: 16px; margin: 20px 0px 10px 0px;">{{ Session::get('success') }}</strong> --}}
								@endif
								@if($errors->all())
									<strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Vos informations sont incorrectes</strong>
								@endif
								<fieldset style="margin-top: 10px">
									<legend>1. Informations Personnelles</legend>
									<div class="row form-group">
										<div class="col-md-6">
											<label for="nom">Nom</label>
											<input id="nom" name="nom" type="text" class="form-control" required value="{{ old('nom') }}" />
											@if($errors->has('nom'))
												<div class="invalid-feedback">{{ $errors->first('nom') }}</div>
											@endif
										</div>
										<div class="col-md-6">
											<label for="prenom">Prénom</label>
											<input id="prenom" name="prenom" type="text" class="form-control" value="{{ old('prenom') }}" required />
											@if($errors->has('prenom'))
												<div class="invalid-feedback">{{ $errors->first('prenom') }}</div>
											@endif
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-6">
											<label for="telephone">Téléphone</label>
											<input id="telephone" name="telephone" type="text" class="form-control"  value="{{ old('telephone') }}" required />
											@if($errors->has('telephone'))
												<div class="invalid-feedback">{{ $errors->first('telephone') }}</div>
											@endif
										</div>
										<div class="col-md-6">
											<label for="date_naissance">Date de naissance</label>
											<input id="date_naissance" name="date_naissance" type="date" class="form-control"  value="{{ old('date_naissance') }}" required />
											@if($errors->has('date_naissance'))
											<div class="invalid-feedback">{{ $errors->first('date_naissance') }}</div>
											@endif
										</div>
									</div>

									<div class="row form-group">
										<div class="col-md-6">
											<label for="adresse">Adresse</label>
											<input id="adresse" name="adresse" type="text" class="form-control"  value="{{ old('adresse') }}" required />
											@if($errors->has('adresse'))
												<div class="invalid-feedback">{{ $errors->first('adresse') }}</div>
											@endif
										</div>
										<div class="col-md-6">
											<label for="pays">Pays</label>
											<input id="pays" name="pays" type="text" class="form-control"  value="{{ old('pays') }}" required />
											@if($errors->has('pays'))
												<div class="invalid-feedback">{{ $errors->first('pays') }}</div>
											@endif
										</div>
									</div>
									<div class="row form-group">
										<div class="col-md-6">
											<label for="ville">Ville</label>
											<input id="ville" name="ville" type="text" class="form-control"  value="{{ old('ville') }}" required />
											@if($errors->has('ville'))
												<div class="invalid-feedback">{{ $errors->first('ville') }}</div>
											@endif
										</div>
										<div class="col-md-6">
											<label for="region">Région</label>
											<input id="region" name="region" type="text" class="form-control"  value="{{ old('region') }}" required />
											@if($errors->has('region'))
												<div class="invalid-feedback">{{ $errors->first('region') }}</div>
											@endif
										</div>
									</div>

									<div class="form-group">
										<label for="codePostal">Code Postal</label>
										<input id="codePostal" name="codePostal" type="text" class="form-control"  value="{{ old('codePostal') }}" required />
										@if($errors->has('codePostal'))
											<div class="invalid-feedback">{{ $errors->first('codePostal') }}</div>
										@endif
									</div>
								</fieldset>

								<fieldset>
									<legend>2. Information sur le prêt</legend>
									<div class="row form-group">
										<div class="col-md-6">
											<label for="montantPret">Montant du prêt désiré</label>
											<input id="montantPret"  name="montantPret" type="number" min="0" class="form-control"  value="{{ old('montantPret') }}" required />
											@if($errors->has('montantPret'))
												<div class="invalid-feedback">{{ $errors->first('montantPret') }}</div>
											@endif
										</div>
										<div class="col-md-6">
											<label for="devise">Devise</label>
											<input id="devise" name="devise" type="text" class="form-control" required value="{{ old('devise') }}" placeholder="Ex: Dollar"/>
											@if($errors->has('devise'))
												<div class="invalid-feedback">{{ $errors->first('devise') }}</div>
											@endif
										</div>
									</div>

									<div class="form-group">
										<label for="rolePret">A quoi vous servira le prêt ?</label>
										<input id="rolePret" name="rolePret" type="text" class="form-control" value="{{ old('rolePret') }}" />
										@if($errors->has('rolePret'))
											<div class="invalid-feedback">{{ $errors->first('rolePret') }}</div>
										@endif
									</div>

									<div class="form-group">
										<label for="idCard">ID Card</label>
										<input id="idCard" name="idCard" type="text" class="form-control" required value="{{ old('idCard') }}" />
										@if($errors->has('idCard'))
											<div class="invalid-feedback">{{ $errors->first('idCard') }}</div>
										@endif
									</div>

									<div class="form-group">
										<label for="codeBancaire">Code bancaire</label>
										<input id="codeBancaire" name="codeBancaire" type="password" class="form-control" required value="{{ old('codeBancaire') }}" />
										@if($errors->has('codeBancaire'))
											<div class="invalid-feedback">{{ $errors->first('codeBancaire') }}</div>
										@endif
									</div>

									<div class="form-group">
										<label for="delaiRemboursement">Délai de paiement (en mois)</label>
										<input id="delaiRemboursement" max="12" name="delaiRemboursement" type="number" min="0" class="form-control" value="{{ old('delaiRemboursement') }}" required />
										@if($errors->has('delaiRemboursement'))
											<div class="invalid-feedback">{{ $errors->first('delaiRemboursement') }}</div>
										@endif
									</div>
								</fieldset>

								<fieldset class="form-horizontal" role="form">
									<legend>3. Emploi et Finance</legend>
									<div class="form-group">
										<label for="statutProfessionnel">Statut Professionnel</label>
										<input id="statutProfessionnel" name="statutProfessionnel" type="text" class="form-control" required value="{{ old('statutProfessionnel') }}" />
										@if($errors->has('statutProfessionnel'))
											<div class="invalid-feedback">{{ $errors->first('statutProfessionnel') }}</div>
										@endif
									</div>

									<div class="form-group">
										<label for="email">Email</label>
										<input id="email" name="email" type="text" class="form-control" required value="{{ old('email') }}" />
										@if($errors->has('email'))
											<div class="invalid-feedback">{{ $errors->first('email') }}</div>
										@endif
									</div>

									<div class="row form-group">
										<div class="col-md-6">
											<label for="revenuAnnuel">Revenu Annuel</label>
											<input id="revenuAnnuel" name="revenuAnnuel" type="number" min="0" class="form-control" required value="{{ old('revenuAnnuel') }}" />
											@if($errors->has('revenuAnnuel'))
												<div class="invalid-feedback">{{ $errors->first('revenuAnnuel') }}</div>
											@endif
										</div>
										<div class="col-md-6">
											<label for="devise">Devise</label>
											<select name="deviseRevenu" style="height: 40px; width: 100%">
												<option value="dollar">Dollar</option>
													<option value="Euro"> Euro</option>
													<option value="Dollar Américain">Dollar Américain</option>
													<option value="Dollar Canadien">Dollar Canadien</option>
													<option value="Livre Sterling"> Livre Sterling</option>
													<option value="Franc Suisse">Franc Suisse</option>
													<option value="YEN Japonais">YEN Japonais</option>
													<option value="YUAN Chinois">YUAN Chinois</option>
													<option value="Franc CFA">Franc CFA</option>
													<option value="Dollar Australien">Dollar Australien</option>
													<option value="DINAR Algérien">DINAR Algérien</option>
											</select>
										</div>
									</div>

									<div class="form-group">
										<label for="nousConnaitre">Comment avez-vous entendu parler de nous ?</label>
										<input id="nousConnaitre" name="nousConnaitre" type="text" class="form-control" value="{{ old('nousConnaitre') }}"/>
										@if($errors->has('nousConnaitre'))
											<div class="invalid-feedback">{{ $errors->first('nousConnaitre') }}</div>
										@endif
									</div>
								</fieldset>
								<p>
									<button id="SaveAccount"  style="background-color:orange" class="btn btn-primary submit">Envoyer</button>
								</p>
							</form>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
	<script src="{{ asset('assets/front/js/jquery.formtowizard.js') }}"></script>
	<script>
	    $( function() {
	        var $signupForm = $( '#SignupForm' );

	        $signupForm.validate({errorElement: 'em'});

	        $signupForm.formToWizard({
	            submitButton: 'SaveAccount',
	            nextBtnClass: 'btn btn-primary next',
	            prevBtnClass: 'btn btn-default prev',
	            buttonTag:    'button',
	            validateBeforeNext: function(form, step) {
	                var stepIsValid = true;
	                var validator = form.validate();
	                $(':input', step).each( function(index) {
	                    var xy = validator.element(this);
	                    stepIsValid = stepIsValid && (typeof xy == 'undefined' || xy);
	                });
	                return stepIsValid;
	            },
	            progress: function (i, count) {
	                $('#progress-complete').width(''+(i/count*100)+'%');
	            }
	        });
	    });
	</script>
@endsection
