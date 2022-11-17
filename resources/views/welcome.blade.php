<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">
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
    </body>
</html>
