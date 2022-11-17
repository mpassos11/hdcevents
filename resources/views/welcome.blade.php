@extends('layouts.main')

@section('title', 'Home | HDC Events')

@section('content')

<h1>Algum titulo</h1>
@if(10 > 5)
    <p>A condição é true</p>
@endif
@if($nome == "Pedro")
    <p>O nome é Pedro</p>
@elseif($nome == 'Matheus')
    <p>O nome é {{ $nome }} e a idade é {{ $idade }}</p>
@else
    <p>O nome não é Pedro nem Matheus</p>
@endif
@for($i = 0; $i < count($arr); $i++)
    <p>{{ $arr[$i] }} - {{ $i }}</p>
@endfor
@php
    $name = 'João';
    echo $name;
@endphp
<!-- Comentário no HTML -->
{{-- Comentário no Blade --}}
@foreach($nomes as $nome)
    <p>{{ $loop->index }}</p>
    <p>{{ $nome }}</p>
@endforeach

@endsection
