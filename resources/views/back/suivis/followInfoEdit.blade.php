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

<div class=" col s6">
					<div class="tittle la">
						<h3 style="text-align:left">Modifier les informations</span></h3>
					</div>
                    <div class="Container">
					    <div class="">
							<form action="{{route('back.update.suivi', $suivis->id)}}" method="post" class="contact_us_form">
								@csrf
								@if (Session::has('success'))
									<script type="text/javascript">alert('Vos informations ont été envoyé avec succès.')</script>
									{{-- <strong style="background: green; border-radius: 40px; padding: 5px 15px 7px 15px; color: white; font-size: 16px; margin: 20px 0px 10px 0px;">{{ Session::get('success') }}</strong> --}}
								@endif
								@if($errors->all())
									<strong style="color: red; font-size: 16px; margin: 20px 0px 10px 0px; padding: 5px">Vos informations sont incorrectes</strong>
								@endif
								
									<div class="row form-group">
										<div class="input-field col s4">
											<label for="origine">Origine</label>
											<input id="origine" value="{{$suivis->origine}}" name="origine" type="text" class="form-control" required value="{{ old('origine') }}" />
											@if($errors->has('origine'))
												<div class="invalid-feedback">{{ $errors->first('origine') }}</div>
											@endif
										</div>
										<div class="input-field col s4">
											<label for="destination">Destination</label>
											<input id="destination" value="{{$suivis->destination}}" name="destination" type="text" class="form-control" value="{{ old('destination') }}" required />
											@if($errors->has('destination'))
												<div class="invalid-feedback">{{ $errors->first('destination') }}</div>
											@endif
										</div>
									</div>

									<div class="row form-group">
										<div class="input-field col s4">
											<label for="poste">Poste</label>
											<input id="poste" name="poste" value="{{$suivis->poste}}" type="text" class="form-control"  value="{{ old('poste') }}" required />
											@if($errors->has('poste'))
												<div class="invalid-feedback">{{ $errors->first('poste') }}</div>
											@endif
										</div>
										<div class="input-field col s4">
											<label for="lieuCurrent">Date</label>
											<input id="lieuCurrent" name="lieuCurrent" value="{{$suivis->lieuCurrent}}" type="date" class="form-control"  value="{{ old('lieuCurrent') }}" required />
											@if($errors->has('lieuCurrent'))
											<div class="invalid-feedback">{{ $errors->first('lieuCurrent') }}</div>
											@endif
										</div>
									</div>

									<div class="row form-group">
										<div class="input-field col s4">
											<label for="heure">Heure</label>
											<input id="heure" name="heure"  value="{{$suivis->heure}}"  type="text" class="form-control"  value="{{ old('heure') }}" required />
											@if($errors->has('heure'))
												<div class="invalid-feedback">{{ $errors->first('heure') }}</div>
											@endif
										</div>
										<div class="input-field col s4">
											<label for="piece">Pièce</label>
											<input id="piece" name="piece" value="{{$suivis->piece}}" type="text" class="form-control"  value="{{ old('piece') }}" required />
											@if($errors->has('pays'))
												<div class="invalid-feedback">{{ $errors->first('piece') }}</div>
											@endif
										</div>
									</div>
									<div class="row form-group">
									<div class="input-field col s4">
											<label for="poste">Numéro</label>
											<input id="numero" name="numero" value="{{$suivis->numero}}" type="text" class="form-control"  value="{{ old('numero') }}" required />
											@if($errors->has('numero'))
												<div class="invalid-feedback">{{ $errors->first('numero') }}</div>
											@endif
										</div>
									</div>
                            
										
								<p>
									<button  style="background-color:orange" class="btn btn-primary" type="submit">Envoyer</button>
								</p>
							</form>
						</div>
					</div>
                </div>







@endsection