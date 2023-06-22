@extends('layouts.main')

@section('marca', 'Catálogo de Carros')

@section('content')

<div id="search-container" class="col-md-12">
    <form action="/" method="GET">
        <div class="form-control">
            <select class="form-select" name="search" placeholder="filtrar por marca">
                <option value="Audi">Audi</option>
                <option value="Mercedes">Mercedes</option>
                <option value="BMW">BMW</option>
                <option value="Porsche">Porsche</option>
                <option value="Ford">Ford</option>
            </select>
        </div>
        <div class="middle">
            <input type="submit" class="btn btn4" value="Buscar por Marca"> 
        </div>
    </form>
</div>
<div id="cars-container" class="col-md-12">

    @if($search)
    <h2>Buscando por: {{$search}}</h2>
    @else
    @endif
    <div id="cards-container" class="row">
        
    <div class="marcas">
            <a href="https://www.audi.com.br/br/web/pt.html">
              <img src="img/logo/audi.png" alt="">
            </a>
            <a href="https://www2.mercedes-benz.com.br/passengercars.html">
              <img src="img/logo/merc.png" alt="">
            </a>
            <a href="https://www.ford.com.br">
              <img src="img/logo/ford.png" alt="">
            </a>
            <a href="https://www.porsche.com/brazil/pt/">
              <img src="img/logo/porsche.png" alt="">
            </a>
            <a href="https://www.bmw.com.br/pt/index.html">
              <img src="img/logo/bmw.png" alt="">
            </a>
          </div>

        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="/img/events/{{ $event->image }}" alt="{{ $event->modelo }}">
            <div class="card-body">
                <h5 class="card-title">{{ $event->marca }}</h5>
                <h5 class="card-title">{{ $event->modelo }}</h5>
                <p class="card-participants">R$: {{$event->valor}}</p>
                <a href="/events/{{ $event->id }} " class="btn btn1">Saber mais</a>
            </div>
        </div>
        @endforeach
        @if(count($events) == 0 && $search)
            <p>Não há carros cadastrados com {{$search}}! <a href="/">Ver todos!</a></p>
        @elseif(count($events) == 0)
            <p>Não há carros cadastrados!</p>
        @endif
    </div>
</div>
@endsection