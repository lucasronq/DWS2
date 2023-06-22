@extends('layouts.main')

@section('title', 'Adicionar Carros')

@section('content')

<div class="div col-md-6 offset-md-3" id="cars-create-container">
    <br>
    <h1>Adicione seu carro</h1>
    <br>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
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
        <br>
       <div class="form-control">
            <label for="modelo">Modelo: </label>
            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Modelo do veiculo">
       </div>
       <br>
       <div class="form-control">
            <label for="modelo">Ano: </label>
            <input type="text" class="form-control" id="ano" name="ano" placeholder="Ano do veiculo">
       </div>
       <br>
       <div class="form-control">
            <label for="modelo">Valor: </label>
            <input type="text" class="form-control" id="valor" name="valor" placeholder="Preço do veiculo">
       </div>
       <br>
       <div class="form-control">
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto do carro</label>
                <input class="form-control" type="file" id="formFile" name="image">
            </div>
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Adicionar Carro">
    </form>
</div>

@endsection