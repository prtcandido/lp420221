@extends('master')
@section('corpo')
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
@endsection