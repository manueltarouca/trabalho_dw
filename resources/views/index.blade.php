@include('layouts.header')

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
                            <h6 id="txtHint">O que procura?</h6>
                            <form action="{{route('results')}}" method="post">
                                @csrf
                                <select name="categoria" class="custom-select">
                                    <option value="0" selected>Todas as Categorias</option>
                                    <option value="1">Hotéis</option>
                                    <option value="2">Restaurantes</option>
                                    <option value="3">Lojas</option>
                                    <option value="4">Beleza & Spa</option>
                                    <option value="5">Cinema</option>
                                </select>
                                <input class="custom-input" style="width: 60%;" type="search" name="nome"
                                       id="search"
                                       placeholder="Procure pelo nome do establecimento" onkeyup="showHint(this.value)">
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
                                    <option value="1">€100 - $499</option>
                                    <option value="2">€500 - $999</option>
                                    <option value="3">€1000 - $4999</option>
                                </select>
                                <button disabled type="submit" class="btn ipv-btn"><i class="fa fa-search pr-2"
                                                                                      aria-hidden="true"></i> Pesquisar
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
                    <p>Ao utilizar a nossa plataforma poderá aceder a <i>reviews</i> relativas à higiene e segurança dos
                        espaços
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
                            <a href="#">{{rand(500,1000)}} establecimentos</a>
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
                            <a href="#">{{rand(250,500)}} establecimentos</a>
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
                            <a href="#">{{rand(0,250)}} establecimentos</a>
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
                                <a href="{{route('estabelecimento',6)}}"><i class="fa fa-star-o" aria-hidden="true"></i></a>
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
                                <a href="{{route('estabelecimento',7)}}"><i class="fa fa-star-o" aria-hidden="true"></i></a>
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
                                <a href="{{route('estabelecimento',8)}}"><i class="fa fa-star-o" aria-hidden="true"></i></a>
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
                                <a href="{{route('estabelecimento',9)}}"><i class="fa fa-star-o" aria-hidden="true"></i></a>
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
                                <a href="{{route('estabelecimento',10)}}"><i class="fa fa-star-o"
                                                                             aria-hidden="true"></i></a>
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
                @foreach($restaurantes as $restaurante)
                    <!-- Single Features Area -->
                        <div class="single-features-area">
                            <img src="{{asset($restaurante->imagem)}}" alt="">
                            <!-- Rating & Map Area -->
                            <div class="ratings-map-area d-flex">
                                <a href="{{route('estabelecimento',$restaurante->id)}}">
                                    @if($restaurante->reviews->avg('classificacao'))
                                        {{round($restaurante->reviews->avg('classificacao'),1)}}
                                    @else
                                        N/A
                                    @endif
                                </a>
                                <a href="{{route('estabelecimento',$restaurante->id)}}"><img
                                        src="{{asset("img/core-img/map.png")}}" alt=""></a>
                            </div>
                            <div class="feature-content d-flex align-items-center justify-content-between">
                                <div class="feature-title">
                                    <h5>{{$restaurante->nome}}</h5>
                                    <p>{{$restaurante->cidade_nome->nome}}</p>
                                </div>
                                <div class="feature-favourite">
                                    <a href="{{route('estabelecimento',$restaurante->id)}}"><i class="fa fa-heart-o"
                                                                                               aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Restaurant Area End ***** -->

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

<!-- Ajax search -->
<script>
    function showHint(str) {
        var xhttp;
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "{{route('search')}}/" + str, true);
        xhttp.send();
    }
</script>

@include('layouts.footer')
