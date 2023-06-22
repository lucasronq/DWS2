@extends('layouts.main')

@section('marca', 'Dasboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus carros</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    @else
    <p>Você ainda não tem carros, <a href="/events/create">adicionar carros</a></p>
    @endif
</div>

@endsection
