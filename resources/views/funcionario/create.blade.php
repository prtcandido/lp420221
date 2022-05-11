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
    @foreach( $errors->all() as $e)
        {{ $e }} <br/>
    @endforeach
    <div class="container">
    <div class="row">
    <div class="col-md-4">
    <form action="/funcionario" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" />
        </div>

        <div class="form-group">
            <label for="endereco">Endereco</label>
            <input type="text" name="endereco" id="endereco" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="dataNascimento">Data</label>
            <input type="date" name="dataNascimento" id="dataNascimento" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Criar" class="form-control">
        </div>
    </form>
    </div>
    </div>
    </div>
    <a href="/funcionario" class="btn btn-primary">Voltar</a>
</body>
</html>