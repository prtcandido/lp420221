@extends('master')
@section('corpo')
    @foreach( $errors->all() as $e)
        {{ $e }} <br/>
    @endforeach
    <div class="container">
    <div class="row">
    <div class="col-md-4">
    <form action="/funcionario/{{$func->id}}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{$func->nome}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="endereco">Endereco</label>
            <input type="text" name="endereco" id="endereco" value="{{$func->endereco}}" class="form-control"/>
        </div>
        <div class="form-group">
            <label for="dataNascimento">Data</label>
            <input type="date" name="dataNascimento" id="dataNascimento" value="{{$func->dataNascimento}}" class="form-control"/>
        </div>
        <div class="form-group">
            <input type="submit" value="Alterar" class="form-control"/>
        </div>
    </form>
    </div>
    </div>
    </div>
    <a href="/funcionario" class="btn btn-primary">Voltar</a>
@endsection