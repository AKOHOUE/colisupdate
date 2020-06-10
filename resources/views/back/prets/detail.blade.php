@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="tab-content profile-tab-cont">
	<!-- Personal Details Tab -->
	<div class="col-md-12">
		<div class="tab-pane fade show active" id="per_details_tab">

			<!-- Personal Details -->
			<div class="row">
				<div class="col-lg-9">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title d-flex justify-content-between">
								<span>Informations liées au prêts</span>
								{{-- <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="fa fa-edit mr-1"></i>Edit</a> --}}
							</h5>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Nom</p>
									<p class="col-sm-9">{{$pret->nom}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Prénom</p>
									<p class="col-sm-9">{{$pret->prenom}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date de naissance</p>
									<p class="col-sm-9">{{$pret->date_naissance}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Téléphone</p>
									<p class="col-sm-9">{{$pret->telephone}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email</p>
									<p class="col-sm-9">{{$pret->email}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Adresse</p>
									<p class="col-sm-9 mb-0">{{$pret->adresse}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Ville</p>
									<p class="col-sm-9 mb-0">{{$pret->ville}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Région</p>
									<p class="col-sm-9 mb-0">{{$pret->region}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Pays</p>
									<p class="col-sm-9 mb-0">{{$pret->pays}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Code Postal</p>
									<p class="col-sm-9 mb-0">{{$pret->codePostal}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Montant prêté</p>
									<p class="col-sm-9 mb-0" style="color: red">{{$pret->montantPret}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Raison du prêt</p>
									<p class="col-sm-9 mb-0">{{$pret->rolePret}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Revenu Annuel</p>
									<p class="col-sm-9 mb-0">{{$pret->revenuAnnuel}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Comment nous connaissez-vous ?</p>
									<p class="col-sm-9 mb-0">{{$pret->nousConnaitre}}</p>
								</div>
								<div class="row">
									<p class="col-sm-3 text-muted text-sm-right mb-0">Statut Professionnel</p>
									<p class="col-sm-9 mb-0">{{$pret->statutProfessionnel}}</p>
								</div>
						</div>
					</div>

					<!-- Edit Details Modal -->
					{{-- <div class="modal fade" id="edit_personal_details" aria-hidden="true" role="dialog">
						<div class="modal-dialog modal-dialog-centered" role="document" >
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title">Personal Details</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<form>
										<div class="row form-row">
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>First Name</label>
													<input type="text" class="form-control" value="John">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Last Name</label>
													<input type="text"  class="form-control" value="Doe">
												</div>
											</div>
											<div class="col-12">
												<div class="form-group">
													<label>Date of Birth</label>
													<div class="cal-icon">
														<input type="text" class="form-control" value="24-07-1983">
													</div>
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Email ID</label>
													<input type="email" class="form-control" value="johndoe@example.com">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Mobile</label>
													<input type="text" value="+1 202-555-0125" class="form-control">
												</div>
											</div>
											<div class="col-12">
												<h5 class="form-title"><span>Address</span></h5>
											</div>
											<div class="col-12">
												<div class="form-group">
												<label>Address</label>
													<input type="text" class="form-control" value="4663 Agriculture Lane">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>City</label>
													<input type="text" class="form-control" value="Miami">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>State</label>
													<input type="text" class="form-control" value="Florida">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Zip Code</label>
													<input type="text" class="form-control" value="22434">
												</div>
											</div>
											<div class="col-12 col-sm-6">
												<div class="form-group">
													<label>Country</label>
													<input type="text" class="form-control" value="United States">
												</div>
											</div>
										</div>
										<button type="submit" class="btn btn-primary btn-block">Save Changes</button>
									</form>
								</div>
							</div>
						</div>
					</div> --}}
				</div>

				<div class="col-lg-3">
					<!-- Account Status -->
					{{-- <div class="card">
						<div class="card-body">
							<h5 class="card-title d-flex justify-content-between">
								<span>Statut du compte</span>
								<a class="edit-link" href="#"><i class="fa fa-edit mr-1"></i> Modifier</a>
							</h5>
							<button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button>
						</div>
					</div> --}}
				</div>
			</div>

		</div>
	</div>
</div>
@endsection
