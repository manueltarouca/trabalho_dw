<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Travel Safe - Know where you go</title>

    <!-- Favicon -->
    <link rel="icon" href="{{asset("img/core-img/favicon.ico")}}">

    <!-- Core Stylesheet -->
    <link href="{{asset("style.css")}}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{asset("css/responsive/responsive.css")}}" rel="stylesheet">

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="ipv-load"></div>
</div>

<!-- ***** Search Form Area ***** -->
<div class="ipv-search-form d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search-close-btn" id="closeBtn">
                    <i class="pe-7s-close-circle" aria-hidden="true"></i>
                </div>
                <form action="#" method="get">
                    <input type="search" name="caviarSearch" id="search"
                           placeholder="Pesquise por qualquer coisa...">
                    <input type="submit" class="d-none" value="submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ***** Header Area Start ***** -->
<header class="header_area" id="header">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg">
                    <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset("img/core-img/logo.png")}}"
                                                                           alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ipvNav"
                            aria-controls="ipvNav" aria-expanded="false" aria-label="Toggle navigation"><span
                            class="fa fa-bars"></span></button>
                    <!-- Nav -->
                    <div class="collapse navbar-collapse" id="ipvNav">
                        <ul class="navbar-nav mr-auto" id="ipvMenu">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('index')}}">Home <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('index')}}">Explorar <span
                                        class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown<i
                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="index.html">Home</a>
                                    <a class="dropdown-item" href="explore.html">Explore</a>
                                    <a class="dropdown-item" href="listing.html">Listing</a>
                                    <a class="dropdown-item" href="single-listing.html">Single Listing</a>
                                    <a class="dropdown-item" href="contact.html">Contact</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.html">Contactos</a>
                            </li>
                        </ul>
                        <!-- Search btn -->
                        <div class="ipv-search-btn">
                            <a id="search-btn" href="#"><i class="fa fa-search" aria-hidden="true"></i>Procurar</a>
                        </div>
                        <!-- Add listings btn -->
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                                   data-toggle="dropdown" aria-haspopup="true"
                                   aria-expanded="false" style="color: white">Olá {{Auth::user()->name}}&nbsp;<i
                                        class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                                    <a class="dropdown-item" href="index.html">Perfil</a>
                                    <a class="dropdown-item" href="explore.html" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Terminar
                                        sessão</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <div class="ipv-add-listings-btn">
                                <a href="#" class="btn ipv-btn">+ Adicionar Establecimento</a>
                            </div>
                        @else
                        <!-- Signin btn -->
                            <div class="ipv-signin-btn">
                                <a href="{{ route('login') }}">Login</a>
                            </div>
                        @endauth
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
