<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @foreach( $errors->all() as $e)
        {{ $e }} <br/>
    @endforeach
    <form action="/funcionario" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" />
        <br/>
        <label for="endereco">Endereco</label>
        <input type="text" name="endereco" id="endereco" />
        <br/>
        <label for="dataNascimento">Data</label>
        <input type="date" name="dataNascimento" id="dataNascimento" />
        <br/>
        <input type="submit" value="Criar">
    </form>
    <a href="/funcionario">Voltar</a>
</body>
</html>