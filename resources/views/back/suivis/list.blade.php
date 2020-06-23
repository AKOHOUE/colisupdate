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
					<h4 class="card-title">Liste de Suivi</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="datatable table table-stripped">
							<thead>
								<tr>
						
									<th>Origine</th>
									<th>Destination</th>
									<th>Numéro</th>
									<th>Lieu actuelle</th>
                                    <th>Heure</th>
									<th>Pièce</th>
                                    <th>Poste</th>
                                
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($clients as $client)
									<tr>
                    
										<td>{{ $client->origine }}</td>
										<td>{{ $client->destination }}</td>
										<td>
										@if(!$client->numero)
										0
										@else
										{{ $client->numero }}
										@endif</td>
                                        <td>{{ $client->lieuCurrent }}</td>
                                        <td>{{ $client->heure }}</td>
                                        <td>{{ $client->piece }}</td>
                                        <td>{{ $client->poste }}</td>

                                        <td class="text-right">

                                            <div class="actions text-center">
                                                
                                                <form action="{{route('back.delete.suivi', $client->id)}}" method="post">
												<a href="{{route('back.edit.suivi', $client->id)}}" class="btn btn-sm bg-success-light mr-2">
                                                    <i class="fe fe-pencil"></i> Editer
                                                </a>
												{{method_field('DELETE')}} {{csrf_field()}}
												<button class="btn btn-sm bg-danger-light" type="submit"><i class="fe fe-trash"></i> Supprimer</button>
                                     
                                                </form>
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
