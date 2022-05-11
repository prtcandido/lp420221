<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">

    <title>Document</title>
</head>
<body>
    <a href="/funcionario/create">Novo Funcionário</a>
    <table class="table table-striped">
    <tr><th>Nome</th><th>Endereço</th><th>DataNasc</th><th></th></tr>
    @foreach($funcs as $f)
      <tr>
        <td>{{ $f->nome  }}</td>
        <td>{{ $f->endereco }}</td>
        <td>{{ $f->dataNascimento }}</td>
        <td>
        <a href="/funcionario/{{ $f->id }}">Excluir</a>
        <a href="/funcionario/{{ $f->id }}/edit">Alterar</a>
        </td>
      </tr>
    @endforeach
    </table>
</body>
</html>