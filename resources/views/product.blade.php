@extends('layouts.main')

@section('title', 'Home | HDC Events')

@section('content')

@if($id != null)
    <p>Exibindo produto id: {{ $id }}</p>
@endif

@endsection
