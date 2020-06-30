@include('layouts.header',['home'=> false,'explorar'=>true,'contact'=>false])

<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/hero-1.jpg)"></div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Listing Destinations Area Start ***** -->
<section class="dorne-listing-destinations-area section-padding-100-50">
    <div class="container">

        <!-- Hóteis -->

        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Hóteis</h4>
                    <p>Passe a noite num destes hóteis</p>
                </div>
            </div>
        </div>
        <div class="row">

        @foreach($hoteis as $hotel)
            <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="{{asset($hotel->imagem)}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            @if($hotel->reviews->avg('classificacao'))
                                <p>{{round($hotel->reviews->avg('classificacao'),1)}}</p>
                            @else
                                <p>N/A</p>
                            @endif
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>{{$hotel->nome}}</h5>
                                <p>{{$hotel->cidade_nome->nome}}</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="{{route('estabelecimento',$hotel->id)}}"><i class="fa fa-heart-o"
                                                                                     aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Restaurantes -->

        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Restaurantes</h4>
                    <p>Aproveite a melhor comida que Portugal pode oferecer</p>
                </div>
            </div>
        </div>
        <div class="row">

        @foreach($restaurantes as $restaurante)
            <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="{{asset($restaurante->imagem)}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            @if($restaurante->reviews->avg('classificacao'))
                                <p>{{round($restaurante->reviews->avg('classificacao'),1)}}</p>
                            @else
                                <p>N/A</p>
                            @endif
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
                </div>
            @endforeach

        </div>

        <!-- Lojas -->

        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Lojas</h4>
                    <p>Aproveite para comprar um presente</p>
                </div>
            </div>
        </div>
        <div class="row">

        @foreach($lojas as $loja)
            <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="{{asset($loja->imagem)}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            @if($loja->reviews->avg('classificacao'))
                                <p>{{round($loja->reviews->avg('classificacao'),1)}}</p>
                            @else
                                <p>N/A</p>
                            @endif
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>{{$loja->nome}}</h5>
                                <p>{{$loja->cidade_nome->nome}}</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="{{route('estabelecimento',$loja->id)}}"><i class="fa fa-heart-o"
                                                                                    aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Spa & Beleza -->

        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Spa & Beleza</h4>
                    <p>Ofereça um mimo ao seu corpo</p>
                </div>
            </div>
        </div>
        <div class="row">

        @foreach($spas as $spa)
            <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="{{asset($spa->imagem)}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            @if($spa->reviews->avg('classificacao'))
                                <p>{{round($spa->reviews->avg('classificacao'),1)}}</p>
                            @else
                                <p>N/A</p>
                            @endif
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>{{$spa->nome}}</h5>
                                <p>{{$spa->cidade_nome->nome}}</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="{{route('estabelecimento',$spa->id)}}"><i class="fa fa-heart-o"
                                                                                   aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Cinemas -->

        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Cinemas</h4>
                    <p>Atualize-se com as novidades da 7ª arte</p>
                </div>
            </div>
        </div>
        <div class="row">

        @foreach($cinemas as $cinema)
            <!-- Single Features Area -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-features-area mb-50">
                        <img src="{{asset($cinema->imagem)}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            @if($cinema->reviews->avg('classificacao'))
                                <p>{{round($cinema->reviews->avg('classificacao'),1)}}</p>
                            @else
                                <p>N/A</p>
                            @endif
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>{{$cinema->nome}}</h5>
                                <p>{{$cinema->cidade_nome->nome}}</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="{{route('estabelecimento',$cinema->id)}}"><i class="fa fa-heart-o"
                                                                                      aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
</section>
<!-- ***** Listing Destinations Area End ***** -->

@include('layouts.footer')
