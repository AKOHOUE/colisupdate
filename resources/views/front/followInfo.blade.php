@extends('front.layouts.app')

@section('stylesheets')
    <style type="text/css">
        p{
            font-size: 18px;
            padding: 7px;
        }
    </style>
@endsection

@section('content')

<div class="col-xl-12">
					<div class="tittle la">
						<h4 style="text-align:left">Entrer vos informations</span></h4>
					</div>
                    <div class="row wrap">
					    <div>
							<form id="" action="{{route('front.followInfoSave')}}" method="post" class="contact_us_form">
								@csrf
								@if (Session::has('success'))
									<script type="text/javascript">alert('Vos informations ont été envoyé avec succès. Consultez votre mail dans les prochaines 48 heures. Nous vous contacterons afin de donner une suite a votre demande de pret. Il se peut que notre message soit dans les spams, verifiez donc.')</script>
									{{-- <strong style="background: green; border-radius: 40px; padding: 5px 15px 7px 15px; color: white; font-size: 16px; margin: 20px 0px 10px 0px;">{{ Session::get('success') }}</strong> --}}
								@endif
								@if($errors->all())
									<strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Vos informations sont incorrectes</strong>
								@endif
							
									<div class="row form-group" style="margin-top: 10px">
										<div class="input-field col s4">
											<label for="origine">Origine</label>
											<input id="origine" name="origine" type="text" class="form-control" required value="{{ old('origine') }}" />
											@if($errors->has('origine'))
												<div class="invalid-feedback">{{ $errors->first('origine') }}</div>
											@endif
										</div>
										<div class="input-field col s4">
											<label for="destination">Destination</label>
											<input id="destination" name="destination" type="text" class="form-control" value="{{ old('destination') }}" required />
											@if($errors->has('destination'))
												<div class="invalid-feedback">{{ $errors->first('destination') }}</div>
											@endif
										</div>
									</div>

									<div class="row form-group">
										<div class="input-field col s4">
											<label for="poste">Poste</label>
											<input id="poste" name="poste" type="text" class="form-control"  value="{{ old('poste') }}" required />
											@if($errors->has('poste'))
												<div class="invalid-feedback">{{ $errors->first('poste') }}</div>
											@endif
										</div>
										<div class="input-field col s4">
											<label for="lieuCurrent">Date</label>
											<input id="lieuCurrent" name="lieuCurrent" type="date" class="form-control"  value="{{ old('lieuCurrent') }}" required />
											@if($errors->has('lieuCurrent'))
											<div class="invalid-feedback">{{ $errors->first('lieuCurrent') }}</div>
											@endif
										</div>
									</div>

									<div class="row form-group">
										<div class="input-field col s4">
											<label for="heure">Heure</label>
											<input id="heure" name="heure" type="text" class="form-control"  value="{{ old('heure') }}" required />
											@if($errors->has('heure'))
												<div class="invalid-feedback">{{ $errors->first('heure') }}</div>
											@endif
										</div>
										<div class="input-field col s4">
											<label for="piece">Pièce</label>
											<input id="piece" name="piece" type="text" class="form-control"  value="{{ old('piece') }}" required />
											@if($errors->has('pays'))
												<div class="invalid-feedback">{{ $errors->first('piece') }}</div>
											@endif
										</div>
									</div>
                                
										
								<p>
									<button  style="background-color:orange" class="btn btn-primary" type="submit">Envoyer</button>
								</p>
							</form>
						</div>

                        <div class="container">
                <div class="row text-center justify-content-center">
                    <col-lg-2>
                        <a href="{{route('front.suivisform')}}" class="btn green_submit_btn form-control" style="margin-bottom: 30px; color: #fff; background-color: #449d44">Démarrer le suivi de votre commande</a>
                    </col-lg-2>
                    <col-lg-2>
                        <a href="{{route('front.logout')}}" class="btn green_submit_btn form-control" style="margin-bottom: 30px; color: #fff; background-color: #449d44">Déconnexion</a>
                    </col-lg-2>

                </div>
            </div>
					</div>
                </div>







@endsection