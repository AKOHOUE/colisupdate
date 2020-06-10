@extends('front.layouts.app')

@section('content')
<section class="container">
<p> <span>Origine de la commande </span> : Belgique <br/> <span>Poste </span>: Paris Poste A11</p>
        <table class="responsive-table">
        <thead>
          <tr>

              <th>Destination</th>
              <th>Lieu courant</th>
              <th>Heure</th>
              <th>Date</th>
              <th>Pièce </th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Alvin</td>
            <td>Eclair</td>
            <td>12:05</td>
            <th>Date</th>
            <td>Alvin</td>
          </tr>
          <tr>
            <td>Alan</td>
            <td>Jellybean</td>
            <td>12:12</td>
            <th>Date</th>
            <td>Alan</td>
          </tr>
          <tr>
            <td>Jonathan</td>
            <td>Lollipop</td>
            <td>12:05</td>
            <th>Date</th>
            <td>Jonathan</td>
          </tr>
        </tbody>
      </table>

        </section>

@endsection
