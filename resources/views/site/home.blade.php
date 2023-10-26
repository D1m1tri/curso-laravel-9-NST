@extends('site.layout')

@section('titulo', 'Home')

@section('conteudo')

    {{-- Isso é um comentário --}}

    {{-- isset($nome) ? $nome : 'não existe' --}}

    {{ $teste ?? 'padrão' }}

@endsection
