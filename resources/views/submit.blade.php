@include('layouts.header')

<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/hero-1.jpg')}})">
</div>
<!-- ***** Breadcumb Area End ***** -->
<!-- ***** Contact Area Start ***** -->

<section class="dorne-listing-destinations-area section-padding-100-50">
    <div class="container">

        <!-- Hóteis -->

        <div class="row">
            <div class="col-12">
                <div class="section-heading dark text-center">
                    <span></span>
                    <h4>Formulário de submissão</h4>
                    <p>Preencha o formulário para submeter o seu establecimento.</p>
                </div>
            </div>
            <div class="ipv-contact-area d-md-flex" id="contact">
                <!-- Contact Form Area -->
                <div class="submit-form-area equal-height">
                    <div class="contact-form">
                        <div class="contact-form-title">
                            <h6>Novo estabelecimento</h6>
                        </div>
                        <form action="{{route('submit-save')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <input required type="text" name="nome" class="form-control" placeholder="Nome">
                                </div>
                                <div class="col-12">
                                    <input required type="text" name="localizacao" class="form-control"
                                           placeholder="Localização">
                                </div>
                                <div class="col-12">
                                    <select required name="categoria" class="form-control">
                                        <option>Selecione uma categoria</option>
                                        @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <select required name="cidade" class="form-control">
                                        <option>Selecione uma cidade</option>
                                        @foreach($cidades as $cidade)
                                            <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea required name="descricao" class="form-control" id="Descrição" cols="30"
                                              rows="10"
                                              placeholder="Descrição..."></textarea>
                                </div>
                                <div class="col-12">
                                    <input required type="file" name="imagem" class="form-control">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn ipv-btn">Submeter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>


@include('layouts.footer')
