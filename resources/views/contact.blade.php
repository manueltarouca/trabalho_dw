@include('layouts.header',['home'=> false,'explorar'=>false,'contact'=>true])
<!-- ***** Breadcumb Area Start ***** -->
<div class="breadcumb-area bg-img bg-overlay" style="background-image: url({{asset('img/bg-img/hero-1.jpg')}})">
</div>
<!-- ***** Breadcumb Area End ***** -->

<!-- ***** Contact Area Start ***** -->
<div class="ipv-contact-area d-md-flex" id="contact">
    <!-- Contact Form Area -->
    <div class="contact-form-area equal-height">
        <div class="contact-text">
            <h4>Portal de Rating de estabelecimentos de acesso publico.</h4>
            <p>O projeto tem como objetivo o desenvolvimento de um portal que permita aos seus utilizadores as seguintes
                funcionalidades associadas a estabelecimentos de acesso público:</p>
            <p>&bull; Procurar</p>
            <p>&bull; Listar</p>
            <p>&bull; Classificar / Comentar</p>
            <p>&bull; Inserir / Remover (Sujeito a aprovação posterior)</p>
            <p>O intuito deste portal, é oferecer uma plataforma informativa relativa à higiene e segurança dos espaços
                que o utilizador pretenda frequentar.</p>
            <p>A classificação inserida é disponibilizada de forma pública a todos os utilizadores da plataforma.</p>
            <p>A informação aqui presente é um produto de uma contribuição comunitária, no entanto poderá ser gerida por
                um administrador.</p>
            <hr>
            <p>Pretende-se fazer aplicação das tecnologias utilizadas nas aulas da disciplina, nomeadamente:</p>
            <p>&bull; BD - MySQL</p>
            <p>&bull; Frontend - Laravel - bootstrap</p>
            <p>&bull; Backend - Laravel</p>
            <p>&bull; Webserver - WAMP Server</p>
            <hr>
            <div class="contact-info d-lg-flex">
                <div class="single-contact-info">
                    <h6><i class="fa fa-user" aria-hidden="true"></i> David Mota</h6>
                    <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> estgv18580@alunos.estgv.ipv.pt</h6>
                    <h6><i class="fa fa-phone" aria-hidden="true"></i> +365 9XXXXXXXX</h6>
                </div>
                <div class="single-contact-info">
                    <h6><i class="fa fa-user" aria-hidden="true"></i> Manuel Augusto Tarouca Martins</h6>
                    <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> estgv16095@alunos.estgv.ipv.pt</h6>
                    <h6><i class="fa fa-phone" aria-hidden="true"></i> +365 933818743</h6>
                </div>
            </div>
        </div>
        <div class="contact-form">
            <div class="contact-form-title">
                <h6>Envie uma mensagem</h6>
            </div>
            <form action="{{route('index')}}">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <input type="text" name="name" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-12 col-md-6">
                        <input type="email" name="email" class="form-control" placeholder="Endereço de E-mail">
                    </div>
                    <div class="col-12">
                        <input type="text" name="subject" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="col-12">
                        <textarea name="message" class="form-control" id="Message" cols="30" rows="10"
                                  placeholder="Mensagem"></textarea>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn ipv-btn">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Map Area -->
    <div class="ipv-map-area equal-height">
        <div id="googleMap"></div>
    </div>
</div>
<!-- ***** Contact Area End ***** -->

<!-- Google maps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJ1YFNZc08KyARHbS-oIKo-tWMsKJPP8k"></script>
<script src="{{asset('js/google-map/map-active.js')}}"></script>

@include('layouts.footer')
