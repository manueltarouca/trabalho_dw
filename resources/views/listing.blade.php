@include('layouts.header')

<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area height-700 bg-img bg-overlay"
     style="background-image: url({{asset($establecimento->imagem)}})">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-content">
                    <div class="map-ratings-review-area d-flex">
                        <a href="#" class="d-flex align-items-center justify-content-center"><img
                                src="{{asset('img/core-img/map.png')}}" alt=""></a>
                        <a href="#">
                            @if($establecimento->reviews->avg('classificacao'))
                                {{$establecimento->reviews->avg('classificacao')}}
                            @else
                                N/A
                            @endif
                        </a>
                        <a href="#write-review">Avalie este establecimento</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Single Listing Area Start ***** -->
<section class="ipv-single-listing-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Single Listing Content -->
            <div class="col-12 col-lg-8">
                <div class="single-listing-content">

                    <div class="listing-title">
                        <h4>{{$establecimento->nome}}</h4>
                        <h6>{{$establecimento->localizacao}}</h6>
                    </div>

                    <div class="single-listing-nav">
                        <nav>
                            <ul id="listingNav">
                                <li class="active"><a href="#overview">Descrição</a></li>
                                <li><a href="#review">Reviews</a></li>
                                <li><a href="#lomap">Localização no map</a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="overview-content mt-50" id="overview">
                        <p>{{$establecimento->descricao}}</p>
                    </div>
                    <div class="listing-reviews-area mt-100" id="review">
                        <h4>reviews</h4>
                        @if($establecimento->reviews->count() == 0)
                            <h6>Ainda não existe nenhuma <i>review</i>, seja o primeiro!</h6>
                        @else
                            @foreach($establecimento->reviews as $review)
                                <div class="single-review-area">
                                    <div class="reviewer-meta d-flex align-items-center">
                                        <img src="{{asset($review->user->imagem)}}" alt="">
                                        <div class="reviewer-content">
                                            <div class="review-title-ratings d-flex justify-content-between">
                                                <h5>“{{$review->titulo}}”</h5>
                                                <div class="ratings">
                                                    @for ($i = 0; $i < $review->classificacao; $i++)
                                                        <img src="{{asset('img/clients-img/star-fill.png')}}" alt="">
                                                    @endfor
                                                    @for ($i = 0; $i < 5-$review->classificacao; $i++)
                                                        <img src="{{asset('img/clients-img/star-unfill.png')}}" alt="">
                                                    @endfor
                                                </div>
                                            </div>
                                            <p>
                                                {{$review->descricao}}
                                                @for ($i = 0; $i < 100; $i++)
                                                    &nbsp;
                                                @endfor
                                            </p>
                                        </div>
                                    </div>
                                    <div class="reviewer-name">
                                        <h6>{{$review->user->name}}</h6>
                                        <p>{{$review->created_at}}</p>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="location-on-map mt-50" id="lomap">
                        <h4>Location on map</h4>
                        <div class="location-map">
                            <div id="locationMap"></div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Listing Sidebar -->
            <div class="col-12 col-md-8 col-lg-4">
                <div class="listing-sidebar">

                    <!-- Listing Verify -->
                    @if($establecimento->estado == 'Ativo')
                        <div class="listing-verify">
                            <a href="#" class="btn ipv-btn w-100"><i class="fa fa-check pr-3"></i> Verificado</a>
                        </div>
                    @else
                        <div class="listing-verify">
                            <a href="#" class="btn ipv-btn w-100"><i class="fa fa-check pr-3"></i> Não
                                Verificado</a>
                        </div>
                @endif
                <!-- Author Widget -->
                    <div class="author-widget mt-50 d-flex align-items-center">
                        <img src="{{asset($establecimento->user->imagem)}}" alt="">
                        <div class="authors-name">
                            <a href="#">{{$establecimento->user->name}}</a>
                            <p>Autor</p>
                        </div>
                    </div>
                    <!-- Opening Hours Widget -->
                    <div class="opening-hours-widget mt-50">
                        <h6>Horário de funcionamento</h6>
                        <ul class="opening-hours">
                            <li>
                                <p>Segunda</p>
                                <p>Fechado</p>
                            </li>
                            <li>
                                <p>Terça</p>
                                <p>9 AM - 1 PM</p>
                            </li>
                            <li>
                                <p>Quarta</p>
                                <p>9 AM - 1 PM</p>
                            </li>
                            <li>
                                <p>Quinta</p>
                                <p>9 AM - 1 PM</p>
                            </li>
                            <li>
                                <p>Sexta</p>
                                <p>9 AM - 1 PM</p>
                            </li>
                            <li>
                                <p>Sábado</p>
                                <p>9 AM - 1 PM</p>
                            </li>
                            <li>
                                <p>Domingo</p>
                                <p>9 AM - 1 PM</p>
                            </li>
                        </ul>
                    </div>

                    <!-- Contact Form -->
                    <div class="contact-form contact-form-widget mt-50" id="write-review">
                        <h6>Escreva uma <i>review</i></h6>
                        @auth()
                            <form action="{{route('create-review',$establecimento->id)}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <input required type="text" name="titulo" class="form-control"
                                               placeholder="Título">
                                    </div>
                                    <div class="col-12">
                                        <textarea required name="descricao" class="form-control" id="Message" cols="30"
                                                  rows="10"
                                                  placeholder="Inserir uma descrição"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <select required name="classificacao" class="form-control">
                                            <option>
                                                Classificação
                                            </option>
                                            <option value="1">
                                                &#11088 (1)
                                            </option>
                                            <option value="2">
                                                &#11088&#11088 (2)
                                            </option>
                                            <option value="3">
                                                &#11088&#11088&#11088 (3)
                                            </option>
                                            <option value="4">
                                                &#11088&#11088&#11088&#11088 (4)
                                            </option>
                                            <option value="5">
                                                &#11088&#11088&#11088&#11088&#11088 (5)
                                            </option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn ipv-btn">Submeter</button>
                                    </div>
                                </div>
                            </form>
                        @else
                            <p>Autentique-se para escrever reviews.</p>
                        @endauth
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Single Listing Area End ***** -->

<!-- Google Maps js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1YFNZc08KyARHbS-oIKo-tWMsKJPP8k"></script>
<script src="{{asset('js/google-map/location-map-active.js')}}"></script>

@include('layouts.footer')
