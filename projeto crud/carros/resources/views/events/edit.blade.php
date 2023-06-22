@extends('layouts.main')

@section('title', 'Editando: ' . $event->title)

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
  <h1>Editando: {{ $event->title }}</h1>
  <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="image">Imagem do Evento:</label>
      <input type="file" id="image" name="image" class="from-control-file">
      <img src="/img/events/{{ $event->image }}" alt="{{ $event->marca }}" class="img-preview">
    </div>
    <div class="form-group">
    <div class="form-control">
            <label for="marca">Marca: </label>
            <select class="form-select" name="marca">
                <option value="Audi">Audi</option>
                <option value="Mercedes">Mercedes</option>
                <option value="BMW">BMW</option>
                <option value="Porsche">Porsche</option>
                <option value="Ford">Ford</option>
            </select>
        </div>
    </div>
    <div class="form-control">
        <label for="modelo">Modelo: </label>
        <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo do veiculo">
    </div>
    <div class="form-control">
        <label for="modelo">Ano: </label>
        <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano do veiculo">
    </div>
    <div class="form-control">
        <label for="modelo">Valor: </label>
        <input type="text" class="form-control" id="valor" name="valor" placeholder="Preço do veiculo">
    </div>
    <input type="submit" class="btn btn-primary" value="Editar Evento">
  </form>
</div>

@endsection