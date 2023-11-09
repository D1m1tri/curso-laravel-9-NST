@extends('admin.layout')

@section('titulo', 'Dashboard')

@section('conteudo')
    <!-- Dropdown Structure -->
    <ul id='dropdown2' class='dropdown-content'>
        <li><a href="{{ route('admin.dashboard')}}">Dashboard</a></li>
        <li><a href="{{ route('login.logout')}}">Sair</a></li>
    </ul>


    <nav class="red">
        <div class="nav-wrapper container ">
            <a href="#" class="center brand-logo " href="index.html"><img src="{{ asset('img/logo.png') }}"></a>
            <ul class="right ">
                <li class="hide-on-med-and-down"><a href="#" onclick="fullScreen()"><i class="material-icons">settings_overscan</i> </a> </li>
                <li><a href="#" class="dropdown-trigger" data-target='dropdown2'>Olá, {{ auth()->user()->first_name }}<i class="material-icons right">expand_more</i> </a></li>
            </ul>
            <a href="#" data-target="slide-out" class="sidenav-trigger left  show-on-large"><i class="material-icons">menu</i></a>
        </div>
    </nav>


    <ul id="slide-out" class="sidenav " >
        <li><div class="user-view">
                <div class="background red ">
                    <img src="{{ asset('img/office.jpg') }}" style="opacity: 0.5">
                </div>
                <a href="#user"><img class="circle" src="{{ asset('img/user.jpg') }}"></a>
                <a href="#name"><span class="white-text name">John Doe</span></a>
                <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
            </div></li>

            <li><a href="#!"><i class="material-icons">dashboard</i>Dashboard</a></li>
            <li><a href="#"><i class="material-icons">playlist_add_circle</i>Produtos</a></li>
            <li><a href="#!"><i class="material-icons">shopping_cart</i>Pedidos</a></li>
            <li><a href="#!"><i class="material-icons">bookmarks</i>Categorias</a></li>
            <li><a href="#!"><i class="material-icons">peoples</i>Usuários</a></li>
    </ul>

    <div class="row container">
        <section class="info">

            <div class="col s12 m4">
                <article class="bg-gradient-green card z-depth-4 ">
                    <i class="material-icons">paid</i>
                    <p>Faturamento</p>
                    <h3>R$ 123,00</h3>
                </article>
            </div>

            <div class="col s12 m4">
                <article class="bg-gradient-blue card z-depth-4 ">
                    <i class="material-icons">face</i>
                    <p>Usuários</p>
                    <h3>34 </h3>
                </article>
            </div>

            <div class="col s12 m4">
                <article class="bg-gradient-orange card z-depth-4 ">
                    <i class="material-icons">shopping_cart</i>
                    <p>Pedidos este mês</p>
                    <h3>0</h3>
                </article>
            </div>

        </section>
    </div>


    <div class="row container ">
        <section class="graficos col s12 m6" >
            <div class="grafico card z-depth-4">
                <h5 class="center"> Aquisição de usuários</h5>
                <canvas id="myChart" width="400" height="200"></canvas>
            </div>
        </section>

        <section class="graficos col s12 m6">
            <div class="grafico card z-depth-4">
                <h5 class="center"> Produtos </h5>
                <canvas id="myChart2" width="400" height="200"></canvas>
            </div>
        </section>
    </div>

    </div>
@endsection
