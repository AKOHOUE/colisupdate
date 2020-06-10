@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container-fluid">
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">transferts</li>
			</ol>
		</nav>
	</section>

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Liste des transferts en attente</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Client</th>
									<th>Moyen de paiement</th>
									<th>Montant</th>
									<th>Devise</th>
									<th>Code 1</th>
									<th>Code 2</th>
									<th>Code 3</th>
									<th>Pourcentage</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($transferts as $transfert)
								<tr>
									<td>{{ $transfert->id }}</td>
									<td>{{ $transfert->user->nom[0] . '. ' . $transfert->user->prenom }}</td>
									<td>{{ $transfert->paiement_mode }}</td>
									<td>{{ $transfert->montant }}</td>
									<td>{{ $transfert->devise }}</td>
									<td>{{ $transfert->code1 }}</td>
									<td>{{ $transfert->code2 }}</td>
									<td>{{ $transfert->code3 }}</td>
									<td>{{ $transfert->percent }}</td>
									<td class="text-right">
										<div class="actions">
											<a href="{{ route('back.transferts.edit', $transfert->id) }}" class="btn btn-sm bg-success-light mr-2">
												<i class="fe fe-pencil"></i> Editer
											</a>
											<a href="{{ route('back.transferts.delete', $transfert->id) }}" class="btn btn-sm bg-danger-light">
												<i class="fe fe-trash"></i> Supprimer
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
