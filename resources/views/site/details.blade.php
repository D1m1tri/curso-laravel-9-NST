@extends('site.layout')
@section('titulo', 'Detalhes do Produto')
@section('conteudo')

    <div class="row container"><br>
        <div class="col s12 m6">
            <img src="{{ $produto->imagem }}" class="responsive-img">
        </div>

        <div class="col s12 m6">
            <h4>{{ $produto->nome }}</h4>
            <h4>R${{ number_format($produto->preco, 2, ',', '.')}}</h4>
            <p>{{ $produto->descricao }}</p>
            <p>
                Postado por: {{ $produto->user->first_name }} <br>
                Categoria: {{ $produto->categoria->nome }} <br>
            </p>
            <button class="btn orange btn-large"> Comprar </button>

        </div>
    </div>

@endsection
