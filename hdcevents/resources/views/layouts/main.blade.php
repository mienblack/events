<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="../css/styles.css">
        <script src="./js/scripts.js"></script>
    </head>
    <body>
        <h1>Título</h1>
        {{--Condicional--}}
        @if(10>5)
            <p>Condição verdadeira</p>
        @endif
        <p>Seu nome é {{$nome}} e sua idade é {{$idade}}.</p>
        @if($nome=="Damien") 
            <p>nome: Damien</p>
        @elseif($nome=="Pedro")
            <p>nome: Pedro</p>
        @else
            <p>Sem nome</p>
        @endif

        {{--Estrutura de repetição--}}
        @for($i=0; $i < count($array); $i++)
            <p>{{$array[$i]}} - {{$i}}</p>
        @endfor 

        @foreach($nomes as $nome)
            <p>{{$nome}}</p>
        @endforeach

        {{--Como usar a tag php no blade--}}
        @php
            $nome = "jojo";
            echo "O nome é $nome.";
        @endphp
    </body>
</html>
