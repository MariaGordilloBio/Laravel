

<!-- View do método index() 

-----||-----||-----
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Controle de Séries</title>
-- Bootstrap--
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
--Jumbotron é componente do Bootstrap que permite criar cabeçalho--
        <div class="jumbotron">
            <h1>Séries</h1>
        </div>

-- Associa esse arq ao layout, define seções com
@section()-->

@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-sucess">
    {{ $mensagem }}
</div>
@endif
<!--mensagem de que série foi adicionada com sucesso-->


<!--link form de add series-->
<a href="/series/criar" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
<!-- loop pela var $series e exibe cada $serie dentro-->
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <{{ $serie->nome }}}>
<!-- forms com metodo post para remover serie-->
        <form method="post" action="/series/{{ $serie->id }}"
              onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes($serie->nome) }}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger btn-sm">
                <i class="far fa-trash-alt"></i>
            </button>
        </form>
    </li>
    @endforeach
</ul>
@endsection