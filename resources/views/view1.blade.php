<html>
    <head>
        <title></title>
    </head>
    <body>
        <h1>Teste</h1>
        <h2>{{ $varView }}</h2>
        @if($varView > 10)
            <h3>Maior que 10</h3>    
        @else
            <h3>Menor que 10</h3>
        @endif
    </body>
</html>