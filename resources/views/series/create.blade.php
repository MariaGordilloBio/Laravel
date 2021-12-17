<!-- View do formulário de adição de séries -->

@extends('layout')

@section('cabecalho')
    Adicionar série
@endsection

@section('conteudo')
<!-- form com met. post -> envia dados à partir dele -->
<form method="post">
    @csrf
<!-- segurança Laravel requisições -->
<!-- classe input-group do Bootstrap -> separa cada input-->
    <!--<div class="input-group"> -->
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name="nome" id="nome">

    </div>
    <button class="btn btn-primary">Adicionar</button>

</form>
@endsection




