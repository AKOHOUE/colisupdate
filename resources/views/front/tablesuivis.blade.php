@extends('front.layouts.app')

@section('content')
<section class="container">

<p> <span>Origine de la commande </span> : {{$suivis->origine}} <br/> <span>Poste </span>: {{$suivis->poste}} </p>
        <table class="responsive-table">
        <thead>
          <tr>
              <th>Destination</th>
              <th>Heure</th>
              <th>Lieu actuelle du colis</th>
              <th>Pièce </th>
              <th>Date </th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$suivis->destination}}</td>
            <td>{{$suivis->heure}}</td>
            <th>{{$suivis->lieuCurrent}}</th>
            <td>{{$suivis->piece}}</td>
            <td>{{$suivis->updated_at->format("Y-m-d")}}</td>
            
          </tr>
        </tbody>
      </table>

        </section>

@endsection
