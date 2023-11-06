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
            <form action="{{ route('site.addcarrinho') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $produto->id }}">
                <input type="hidden" name="name" value="{{ $produto->nome }}">
                <input type="hidden" name="price" value="{{ $produto->preco }}">
                <input type="hidden" name="img" value="{{ $produto->imagem }}">
                <input type="number" name="qnt" min="1" value="1">
                <button class="btn orange btn-large"> Comprar </button>
            </form>

        </div>
    </div>

@endsection
