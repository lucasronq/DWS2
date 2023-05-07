@extends('layouts.main')

@section('title', 'Produtos')

@section('content')

    @if($id != null)
        <p>Exibindo Produto id: {{$id}}</p>
    @endif

@endsection()
 