@extends('back.layouts.app', [$auth = false])

@section('content')
<div class="content container-fluid">
	<section class="comp-section">
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">Clients</li>
			</ol>
		</nav>
	</section>

	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Liste des Clients</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
									<th>Noms et Prénom(s)</th>
									<th>Email</th>
									<th>Pays</th>
									<th>Téléphone</th>
									<th>Montant</th>
                                    <th>Devise</th>
									<th>IBAN</th>
                                    <th>BICSWIFT</th>
									<th class="text-right">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($clients as $client)
									<tr>
                                    <td>{{ $client->nom . ' ' . $client->prenom}} </td>
										<td>{{ $client->email }}</td>
										<td>{{ $client->pays }}</td>
										<td>{{ $client->telephone }}</td>
										<td>{{ $client->montantCompte }}</td>
                                        <td>{{ $client->devise }}</td>
                                        <td>{{ $client->iban }}</td>
                                        <td>{{ $client->bicswift }}</td>
                                        <td class="text-right">
                                            <div class="actions">
                                                <a href="{{ route('back.clients.edit', $client->id) }}" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Editer
                                                </a>
                                                <a href="{{ route('back.clients.delete', $client->id) }}" class="btn btn-sm bg-danger-light">
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
