@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container-fluid">

					<!-- Page Header -->
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Suivis</li>
			</ol>
		</nav>
	</section>
	<!-- /Page Header -->

	<!-- Row -->
	<div class="row">
		<div class="col-sm-12">

			<!-- Custom Boostrap Validation -->
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Modifier un suivis</h4>
				</div>
				<div class="card-body">
                    <div class="row">

                    </div>
					<form method="post" action="{{ route('back.clients.edit.post', $user->id) }}">
						@csrf
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="nom">Nom<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}">
								<div class="valid-feedback">
									Ce champ est obligatoire
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="prenom">Prénom<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}">
								<div class="valid-feedback">
									Ce champ est obligatoire
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="telephone">Téléphone<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="telephone" name="telephone" value="{{ $user->telephone }}">
								<div class="valid-feedback">
									Ce champ est onligatoire
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="email">Email<span style="color:red">*</span></label>
								<input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
								<div class="valid-feedback">
									Ce champ est onligatoire
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="adresse">Adresse<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="adresse" name="adresse" value="{{ $user->adresse }}">
								<div class="valid-feedback">
									Ce champ est onligatoire
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="date_naissance">Date de naissance<span style="color:red">*</span></label>
								<input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ $user->date_naissance }}">
								<div class="valid-feedback">
									Ce champ est onligatoire
								</div>
							</div>
						</div>
						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="pays">Pays<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="pays" name="pays" value="{{ $user->pays }}">
								<div class="valid-feedback">
									Ce champ est onligatoire
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="codePostal">Code Postal<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="codePostal" name="codePostal" value="{{ $user->codePostal }}">
								<div class="valid-feedback">
									Ce champ est onligatoire
								</div>
							</div>
						</div>
						<div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="montantCompte">Montant<span style="color:red">*</span></label>
                                <input type="text" class="form-control" id="montantCompte" name="montantCompte" value="{{ $user->montantCompte }}">
                                <div class="valid-feedback">
                                    Ce champ est onligatoire
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="devise">Devise</label>
                                <input id="devise" name="devise" type="text" class="form-control" required value="{{ old('devise') }}" placeholder="Ex: Dollar"/>
                                @if($errors->has('devise'))
                                    <div class="invalid-feedback">{{ $errors->first('devise') }}</div>
                                @endif
                            </div>
                        </div>

						<div class="form-row">
							<div class="col-md-6 mb-3">
								<label for="iban">IBAN<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="iban" name="iban" value="{{ $user->iban }}">
								<div class="valid-feedback">
									Ce champ est obligatoire
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="bicswift">BICSWIFT<span style="color:red">*</span></label>
								<input type="text" class="form-control" id="bicswift" name="bicswift" value="{{ $user->bicswift }}">
								<div class="valid-feedback">
									Ce champ est obligatoire
								</div>
							</div>
						</div>
						<a href="{{ route('back.clients.index') }}" style="margin-right: 10px" class="btn btn-primary">Annuler</a>
						<button class="btn btn-success" type="submit">Enrégistrer</button>
					</form>
				</div>
			</div>


		</div>
	</div>
	<!-- /Row -->

				</div>
@endsection
