@include('layouts.header')

<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/hero-1.jpg')}})">
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- Explore Area -->
<section class="ipv-explore-area d-md-flex">
    <!-- Explore Search Area -->
    <div class="explore-search-area d-md-flex">
        <!-- Explore Search Form -->
        <div class="explore-search-form">
            <h6>O que procura?</h6>
            <!-- Tabs -->
            <div class="nav nav-tabs" id="heroTab" role="tablist">
                <a class="nav-item nav-link active" id="nav-places-tab" data-toggle="tab" href="#nav-places" role="tab"
                   aria-controls="nav-places" aria-selected="true">&nbsp;&nbsp;Establecimentos&nbsp;&nbsp;</a>
                <a class="nav-item nav-link" id="nav-events-tab" data-toggle="tab" href="#nav-events" role="tab"
                   aria-controls="nav-events" aria-selected="false">&nbsp;&nbsp;Eventos (em
                    breve)&nbsp;&nbsp;</a>
            </div>
            <!-- Tabs Content -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-places" role="tabpanel" aria-labelledby="nav-places-tab">
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
                        <input class="custom-select" style="width: 100%; background: #fff;" type="search" name="nome"
                               id="search"
                               placeholder="Procure pelo nome do establecimento">
                        <button type="submit" class="btn ipv-btn mt-50 bg-white text-dark"><i
                                class="fa fa-search pr-2" aria-hidden="true"></i> Pesquisar
                        </button>
                    </form>
                </div>
                <div class="tab-pane fade" id="nav-events" role="tabpanel" aria-labelledby="nav-events-tab">
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
                        <button disabled type="submit" class="btn ipv-btn mt-50 bg-white text-dark"><i
                                class="fa fa-search pr-2" aria-hidden="true"></i> Pesquisar
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Explore Search Result -->
        <div class="explore-search-result">
            <br>
        @if(count($establecimentos)>0)
            @foreach($establecimentos as $establecimento)
                <!-- Single Features Area -->
                    <div class="single-features-area">
                        <img src="{{asset($establecimento->imagem)}}" alt="">
                        <!-- Price -->
                        <div class="price-start">
                            <p>{{$establecimento->categoria_nome->nome}}</p>
                        </div>
                        <div class="feature-content d-flex align-items-center justify-content-between">
                            <div class="feature-title">
                                <h5>{{$establecimento->nome}}</h5>
                                <p>{{$establecimento->cidade_nome->nome}}</p>
                            </div>
                            <div class="feature-favourite">
                                <a href="{{route('estabelecimento',$establecimento->id)}}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <br>
                <h4>Sem resultados...</h4>
            @endif
        </div>
    </div>
    <!-- Explore Map Area -->
    <div class="explore-map-area">
        <div id="exploreGoogleMap"></div>
    </div>
</section>

<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1YFNZc08KyARHbS-oIKo-tWMsKJPP8k"></script>
<script src="{{asset('js/google-map/explore-map-active.js')}}"></script>

@include('layouts.footer')
