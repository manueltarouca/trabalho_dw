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
                           placeholder="Search Your Desire Destinations or Events">
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
                    <a class="navbar-brand" href="index.html"><img src="{{asset("img/core-img/logo.png")}}" alt=""></a>
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
                        <!-- Signin btn -->
                        <div class="ipv-signin-btn">
                            <a href="#">Login</a>
                        </div>
                        <!-- Add listings btn -->
                        <div class="ipv-add-listings-btn">
                            <a href="#" class="btn ipv-btn">+ Adicionar Establecimento</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Welcome Area Start ***** -->
<section class="ipv-welcome-area bg-img bg-overlay"
         style="background-image: url({{asset("img/bg-img/hero-1.jpg")}});">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col-12 col-md-10">
                <div class="hero-content">
                    <h2>Visite sem preocupações</h2>
                    <h4>Informe-se através da nossa plataforma</h4>
                </div>
                <!-- Hero Search Form -->
                <div class="hero-search-form">
                    <!-- Tabs -->
                    <div class="nav nav-tabs" id="heroTab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places"
                           role="tab" aria-controls="nav-places" aria-selected="true">&nbsp;&nbsp;Establecimentos&nbsp;&nbsp;</a>
                        <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                           aria-controls="nav-events" aria-selected="false">&nbsp;&nbsp;Eventos (em
                            breve)&nbsp;&nbsp;</a>
                    </div>
                    <!-- Tabs Content -->
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-places" role="tabpanel"
                             aria-labelledby="nav-places-tab">
                            <h6>O que procura?</h6>
                            <form action="#" method="get">
                                <select class="custom-select">
                                    <option selected>Todas as Categorias</option>
                                    <option value="1">Hotéis</option>
                                    <option value="2">Restaurantes</option>
                                    <option value="3">Lojas</option>
                                    <option value="3">Beleza & Spa</option>
                                    <option value="3">Cinema</option>
                                </select>
                                <input class="custom-input" style="width: 60%;" type="search" name="caviarSearch"
                                       id="search"
                                       placeholder="Procure pelo nome do establecimento">
                                <button type="submit" class="btn ipv-btn"><i class="fa fa-search pr-2"
                                                                               aria-hidden="true"></i> Pesquisar
                                </button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
                            <h6>O que procura?</h6>
                            <form action="#" method="get">
                                <select disabled class="custom-select">
                                    <option selected>Local</option>
                                    <option value="1">New York</option>
                                    <option value="2">Latvia</option>
                                    <option value="3">Dhaka</option>
                                    <option value="4">Melbourne</option>
                                    <option value="5">London</option>
                                </select>
                                <select disabled class="custom-select">
                                    <option selected>Todas as Categorias</option>
                                    <option value="1">Catagories 1</option>
                                    <option value="2">Catagories 2</option>
                                    <option value="3">Catagories 3</option>
                                </select>
                                <select disabled class="custom-select">
                                    <option selected>Preço</option>
                                    <option value="1">$100 - $499</option>
                                    <option value="2">$500 - $999</option>
                                    <option value="3">$1000 - $4999</option>
                                </select>
                                <button disabled type="submit" class="btn ipv-btn"><i class="fa fa-search pr-2"
                                                                                        aria-hidden="true"></i> Search
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Social Btn -->
    <div class="hero-social-btn">
        <div class="social-title d-flex align-items-center">
            <h6>Segue-nos nas redes socias!</h6>
            <span></span>
        </div>
        <div class="social-btns">
            <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin" aria-haspopup="true"></i></a>
            <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-haspopup="true"></i></a>
            <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"
                                                                    aria-haspopup="true"></i></a>
            <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-haspopup="true"></i></a>
        </div>
    </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Catagory Area Start ***** -->
<section class="ipv-catagory-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="all-catagories">
                    <div class="row">
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.2s">
                                <div class="catagory-content">
                                    <img src="{{asset("img/core-img/icon-1.png")}}" alt="">
                                    <a href="#">
                                        <h6>Hotéis</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.4s">
                                <div class="catagory-content">
                                    <img src="{{asset("img/core-img/icon-2.png")}}" alt="">
                                    <a href="#">
                                        <h6>Restaurantes</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.6s">
                                <div class="catagory-content">
                                    <img src="{{asset("img/core-img/icon-3.png")}}" alt="">
                                    <a href="#">
                                        <h6>Lojas</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-sm-6 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="0.8s">
                                <div class="catagory-content">
                                    <img src="{{asset("img/core-img/icon-4.png")}}" alt="">
                                    <a href="#">
                                        <h6>Beleza &amp; Spa</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Catagory Area -->
                        <div class="col-12 col-md">
                            <div class="single-catagory-area wow fadeInUpBig" data-wow-delay="1s">
                                <div class="catagory-content">
                                    <img src="{{asset("img/core-img/icon-5.png")}}" alt="">
                                    <a href="#">
                                        <h6>Cinema</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Catagory Area End ***** -->

<!-- ***** About Area Start ***** -->
<section class="ipv-about-area section-padding-0-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-content text-center">
                    <h2>Explore o seu destino em seguraça com <br><span>Travel Safe</span></h2>
                    <p>Ao utilizar a nossa plataforma poderá aceder a <i>reviews</i> relativas à higiene e segurança dos espaços
                        que o utilizador pretenda frequentar.
                        As reviews são disponibilizadas de forma pública para que todos tenham acesso.<br>
                        <strong>A informação aqui presente é um produto de uma contribuição comunitária.</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** About Area End ***** -->

<!-- ***** Editor Pick Area Start ***** -->
<section class="ipv-editors-pick-area bg-img bg-overlay-9 section-padding-100"
         style="background-image: url({{asset("img/bg-img/hero-2.jpg")}});">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Cidades que precisa de visitar</h4>
                    <p>A mais populares</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{asset("img/bg-img/porto.jpg")}}" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">Porto</a>
                            <a href="#">1643 establecimentos</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.4s">
                    <img src="{{asset("img/bg-img/lisboa.jpg")}}" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">Lisboa</a>
                            <a href="#">943 Destinations</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
                <div class="single-editors-pick-area wow fadeInUp" data-wow-delay="0.6s">
                    <img src="{{asset("img/bg-img/viseu.jpg")}}" alt="">
                    <div class="editors-pick-info">
                        <div class="places-total-destinations d-flex">
                            <a href="#">Viseu</a>
                            <a href="#">243 Destinations</a>
                        </div>
                        <div class="add-more">
                            <a href="#">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Editor Pick Area End ***** -->

<!-- ***** Features Destinations Area Start ***** -->
<section class="ipv-features-destinations-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Establecimentos em destaque</h4>
                    <p>As nossas sugestões</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="features-slides owl-carousel">
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-1.jpg")}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>Hotéis</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Four Seasons Hotel Ritz Lisbon</h5>
                                <p>Lisboa</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-2.jpg")}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>Restaurantes</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Santa Luzia<br>&nbsp;</h5>
                                <p>Viseu</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-3.jpg")}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>Lojas</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Livraria Bertrand<br>&nbsp;</h5>
                                <p>Porto</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-4.jpg")}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>Beleza & Spa</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Six Senses Douro Valley</h5>
                                <p>Viseu</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-5.jpg")}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>Cinema</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Cinema NOS Palácio do Gelo</h5>
                                <p>Viseu</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Destinations Area End ***** -->

<!-- ***** Features Restaurant Area Start ***** -->
<section class="ipv-features-restaurant-area bg-default">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Restaurantes em destaque</h4>
                    <p>A categoria mais popular</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="features-slides owl-carousel">
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-6.jpg")}}" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#">8.5</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Martha’s bar</h5>
                                <p>Manhathan</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-7.jpg")}}" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#">9.5</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Delux Restaurant</h5>
                                <p>Paris</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-8.jpg")}}" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#">8.2</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Jim’s corner Pub</h5>
                                <p>Madrid</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-9.jpg")}}" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#">8.7</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>tower Risto bar</h5>
                                <p>Sydney</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset("img/bg-img/feature-10.jpg")}}" alt="">
                        <!-- Rating & Map Area -->
                        <div class="ratings-map-area d-flex">
                            <a href="#">9.8</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>Pizzeria venezia</h5>
                                <p>Hong Kong</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Restaurant Area End ***** -->


<!-- ***** Features Events Area Start ***** -->
<!--
<section class="ipv-features-events-area bg-img bg-overlay-9 section-padding-100-50"
         style="background-image: url({{asset("img/bg-img/hero-3.jpg")}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <span></span>
                    <h4>Featured events</h4>
                    <p>Editor’s pick</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                     data-wow-delay="0.2s">
                    <div class="feature-events-thumb">
                        <img src="{{asset("img/bg-img/event-1.jpg")}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Jazz Concert</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                     data-wow-delay="0.3s">
                    <div class="feature-events-thumb">
                        <img src="{{asset("img/bg-img/event-2.jpg")}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>DeeJay in the house</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                     data-wow-delay="0.4s">
                    <div class="feature-events-thumb">
                        <img src="{{asset("img/bg-img/event-3.jpg")}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Theatre Night outside</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                     data-wow-delay="0.5s">
                    <div class="feature-events-thumb">
                        <img src="{{asset("img/bg-img/event-4.jpg")}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Wine tasting</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                     data-wow-delay="0.6s">
                    <div class="feature-events-thumb">
                        <img src="{{asset("img/bg-img/event-5.jpg")}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>New Moon Party</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="single-feature-events-area d-sm-flex align-items-center wow fadeInUpBig"
                     data-wow-delay="0.7s">
                    <div class="feature-events-thumb">
                        <img src="{{asset("img/bg-img/event-6.jpg")}}" alt="">
                        <div class="date-map-area d-flex">
                            <a href="#">26 Nov</a>
                            <a href="#"><img src="{{asset("img/core-img/map.png")}}" alt=""></a>
                        </div>
                    </div>
                    <div class="feature-events-content">
                        <h5>Happy hour at pub</h5>
                        <h6>Manhathan</h6>
                        <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>
                    </div>
                    <div class="feature-events-details-btn">
                        <a href="#">+</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- ***** Features Events Area End ***** -->

<!-- ***** Clients Area Start ***** -->
<div class="ipv-clients-area section-padding-100" style="background-image: linear-gradient(#341a79, white);">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="clients-logo d-md-flex align-items-center justify-content-around">
                    <img src="{{asset("img/clients-img/1.png")}}" alt="" width="100" height="50">
                    <img src="{{asset("img/clients-img/2.png")}}" alt="" width="100" height="50">
                    <img src="{{asset("img/clients-img/3.png")}}" alt="" width="100" height="50">
                    <img src="{{asset("img/clients-img/4.png")}}" alt="" width="100" height="50">
                    <img src="{{asset("img/clients-img/5.png")}}" alt="" width="100" height="50">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Clients Area End ***** -->

<!-- ****** Footer Area Start ****** -->
<footer class="ipv-footer-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-md-flex align-items-center justify-content-between">
                <div class="footer-text">
                    <p>
                        Prova de conceito | <script>document.write(new Date().getFullYear().toString());</script>
                        DW MSTIO | Manuel Martins & David Mota
                    </p>
                </div>
                <div class="footer-social-btns">
                    <a href="https://www.linkedin.com/" target="_blank"><i class="fa fa-linkedin"
                                                                           aria-haspopup="true"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"
                                                                      aria-haspopup="true"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"
                                                                            aria-haspopup="true"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"
                                                                           aria-haspopup="true"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ****** Footer Area End ****** -->

<!-- jQuery-2.2.4 js -->
<script src="{{asset("js/jquery/jquery-2.2.4.min.js")}}"></script>
<!-- Popper js -->
<script src="{{asset("js/bootstrap/popper.min.js")}}"></script>
<!-- Bootstrap-4 js -->
<script src="{{asset("js/bootstrap/bootstrap.min.js")}}"></script>
<!-- All Plugins js -->
<script src="{{asset("js/others/plugins.js")}}"></script>
<!-- Active JS -->
<script src="{{asset("js/active.js")}}"></script>
</body>

</html>
