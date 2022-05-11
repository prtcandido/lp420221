<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="/funcionario/create">Novo Funcionário</a>
    <br/>
    @foreach($funcs as $f)
        {{ $f->nome  }}
        &nbsp;
        {{ $f->endereco }}
        &nbsp;
        {{ $f->dataNascimento }}
        <a href="/funcionario/{{ $f->id }}">Excluir</a>
        <a href="/funcionario/{{ $f->id }}/edit">Alterar</a>
        <br />
    @endforeach
</body>
</html>