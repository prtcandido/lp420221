<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	
	<title></title>
</head>
<body>
	Nome: {{ $func->nome }}
	<br/>
	Endereço: {{ $func->endereco }}
	<br/>

	<form action="/funcionario/{{ $func->id }}" method="post">
		@csrf
		@method('delete')
		<input type="submit" value="Confirmar" />
	</form>

	<a href="/funcionario">Voltar</a>
</body>
</html>