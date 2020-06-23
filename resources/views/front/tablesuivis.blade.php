@extends('front.layouts.app')

@section('content')
<section class="container">

<p> <span>Origine de la commande </span> : {{$suivis->origine}} <br/> <span>Poste </span>: {{$suivis->poste}} </p>
        <table class="responsive-table">
        <thead>
          <tr>
              <th>Destination</th>
              <th>Heure</th>
              <th>Date</th>
              <th>Pièce </th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>{{$suivis->destination}}</td>
            <td>{{$suivis->heure}}</td>
            <th>{{$suivis->lieuCurrent}}</th>
            <td>{{$suivis->piece}}</td>
          </tr>
        </tbody>
      </table>

        </section>

@endsection
