@extends('site.layout')
@section('titulo', 'Detalhes do Produto')
@section('conteudo')

    <div class="row container">
        <div class="col s12 m6">
            <img src="{{ $produto->imagem }}" class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h1>{{ $produto->nome }}</h1>
            <p>{{ $produto->descricao }}</p>
            <p>
                Postado por: {{ $produto->user->first_name }} <br>
                Categoria: {{ $produto->categoria->nome }} <br>
            </p>
            <button class="btn orange btn-large"> Comprar </button>

        </div>
    </div>

@endsection
