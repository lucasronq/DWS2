@extends('layouts.main')

@section('title', $event->modelo)

@section('content')

  <div class="col-md-10 offset-md-1">
    <div class="row">
      <div id="image-container" class="col-md-4">
        <img src="/img/events/{{ $event->image }}" class="img-fluid" alt="{{ $event->modelo }}">
      </div>
      <div id="info-container" class="col-md-4">
        <h1>{{ $event->modelo }}</h1>
        <p class="car-marca"><ion-icon name="car-sport-outline"></ion-icon> {{ $event->marca }}</p>
        <p class="car-valor"><ion-icon name="cash-outline"></ion-icon> {{ $event->valor }}</p>
        <p class="car-ano"><ion-icon name="calendar-outline"></ion-icon> {{ $event->ano }}</p>
      </div>
      
    </div>
  </div>

@endsection