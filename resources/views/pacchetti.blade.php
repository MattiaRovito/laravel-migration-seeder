@extends('layouts.app')

@section('title', 'Pacchetti')

@section('content')


<h2>I nostri pacchetti</h2>

@foreach ($packages as $package)
    


<div class="card">
    <div class="card-header">
      {{ $package->title_package}}
    </div>
    <div class="card-body">
      <h5 class="card-title">Destination Country: {{$package->country}}</h5>
      <p class="card-text">Days: {{$package->days}}</p>
      <a href="#" class="btn btn-primary">Price: {{$package->price}} $</a>
    </div>
</div>

@endforeach

<div>
  {{ $packages->links() }}
</div>



@endsection