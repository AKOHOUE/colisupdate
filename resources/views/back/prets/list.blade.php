@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container">
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Accueil</a></li>
				<li class="breadcrumb-item active" aria-current="page">Compte créé</li>
			</ol>
		</nav>
	</section>

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Liste des Prêts</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
									<th>Noms</th>
									<th>Prénoms</th>
									<th>Email</th>
									<th>Statut Professionnel</th>
									<th>Montant du prêt</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($prets as $pret)
								<tr>
									<td>{{ $pret->nom }}</td>
									<td>{{ $pret->prenom }}</td>
									<td>{{ $pret->email }}</td>
									<td>{{ $pret->statutProfessionnel }}</td>
									<td>{{ $pret->montantPret }}</td>
									<td class="text-right">
										<div class="actions">
											<a href="{{ route('back.pret.store', $pret->id) }}" class="btn btn-sm bg-success-light mr-2">
												<i class="fe fe-eye"></i> Voir
											</a>
										</div>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
