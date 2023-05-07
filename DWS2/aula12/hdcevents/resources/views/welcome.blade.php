@extends('layouts.main')

@section('title', "HDC Events")

@section('content')



<h1>Titulo</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10 > 5)
    <p>A condição é true</p>
@endif

<p>{{ $nome }}</p>

@if($nome == "Lucas")
<p>O nome é Lucas</p>
@elseif($nome == "Matheus")
<p>O nome é {{$nome}} e ele tem {{$idade}} anos, e trabalho como {{$profissao}}.</p>
@else
<p>O nome não é Lucas</p>
@endif

@for($i = 0; $i < count($arr); $i++)
    <p>{{$arr[$i] }} - {{$i}}</p>
    @if($i == 2)
    <p>o i é 2</p>
    @endif
@endfor

@foreach ($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>    
@endforeach

@php
    $name = "João";
    echo $name;
@endphp

<!-- Coment HTML -->
{{-- Comentario Blade --}}

@endsection