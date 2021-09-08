@extends('layouts.app')

@section('title', 'Pacchetti')

@section('content')


<h2>Descrizione</h2>

    <div class="card">
        <h5 class="card-header">{{ $package->title_package}} </h5>
        
        <div class="card-body">
        
          <h5 class="card-title">Destination Country: {{ $package->country}}</h5>
          <p class="card-text">Price: {{$package->price}} $</p>

        </div>
    </div>         
  


@endsection