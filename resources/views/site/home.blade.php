@extends('site.layout')

@section('titulo', 'Home')

@section('conteudo')

    <div class="row container">
        <div class="col s12 m3">
            <div class="card">
                <div class="card-image">
                    <img src="images/sample-1.jpg">
                    <span class="card-title">Card Title</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class=card>
                <div class=card-image>
                    <img src="">
                    <span class="card-title">Nome do Produto</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Descrição do Produto</p>
                    <p>R$ 99,99</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class=card>
                <div class=card-image>
                    <img src="">
                    <span class="card-title">Nome do Produto</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Descrição do Produto</p>
                    <p>R$ 99,99</p>
                </div>
            </div>
        </div>
        <div class="col s12 m3">
            <div class=card>
                <div class=card-image>
                    <img src="">
                    <span class="card-title">Nome do Produto</span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add_shopping_cart</i></a>
                </div>
                <div class="card-content">
                    <p>Descrição do Produto</p>
                    <p>R$ 99,99</p>
                </div>
            </div>
        </div>
    </div>

@endsection
