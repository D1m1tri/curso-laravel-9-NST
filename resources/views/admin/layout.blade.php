<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('titulo')</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Custom CSS-->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">



    </head>
    <body>
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

                <li><a href="{{route('admin.dashboard')}}"><i class="material-icons">dashboard</i>Dashboard</a></li>
                <li><a href="{{route('admin.produtos')}}"><i class="material-icons">playlist_add_circle</i>Produtos</a></li>
                <li><a href="#!"><i class="material-icons">shopping_cart</i>Pedidos</a></li>
                <li><a href="#!"><i class="material-icons">bookmarks</i>Categorias</a></li>
                <li><a href="#!"><i class="material-icons">peoples</i>Usuários</a></li>
        </ul>

        @yield('conteudo')



        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script src="{{ asset('js/chart.js') }}" ></script>
        <script src="{{ asset('js/main.js') }}"></script>
        @stack('graficos')

    </body>
</html>
