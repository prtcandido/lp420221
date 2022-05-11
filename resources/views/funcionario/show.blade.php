<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
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