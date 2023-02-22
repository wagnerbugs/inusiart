<footer class="footer-area bg-main">
    <div class="container">
        <div class="row align-items-top">
            <div class="first-footer-inner col-12">
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="newsletter-title">
                        <h2 class="title">Fique por dentro das novidades</h2>
                        <p>Informaremos em novidades e novas postagens</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div id="mc_embed_signup" class="subscribe-form-2">
                        <form class="validate subscribe-form-style-2" method="post" action="{{ route('newsletter') }}">
                            @csrf
                            <div id="mc_embed_signup_scroll" class="mc-form-2">
                                <input class="email" type="email" placeholder="Seu e-mail" name="email" value="{{ old('email') }}" required="" >
                                <div class="clear-2">
                                    <input id="mc-embedded-subscribe" class="button" type="submit" name="subscribe" value="Cadastrar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 widget-area">
                <div class="logo">
                    <a href="{{ route('index') }}">
                        <img src="{{ url('storage/images/logo/logo_inusiart.png') }}" alt="" style="width: 200px;">
                    </a>
                </div>
                <p>Bem-vindo ao site da Inusiart, especialista em terceirização de produção de móveis. Nós acreditamos que terceirizar sua produção de móveis pode trazer muitos benefícios para sua empresa e gostaríamos de compartilhar alguns deles com você.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 widget-area">
                <div class="footer-widget">
                    <h3 class="footer-title">Links rápidos</h3>
                    <div class="footer-info-list">
                        <ul>
                            <li><i class="fa fa-plus" aria-hidden="true"></i><a href="{{ route('about') }}">A Inusiart</a></li>
                            <li><i class="fa fa-plus" aria-hidden="true"></i><a href="{{ route('contact') }}">Contato</a></li>
                            <li><i class="fa fa-plus" aria-hidden="true"></i><a href="#">Política de privacidade</a></li>
                            <li><i class="fa fa-plus" aria-hidden="true"></i><a href="#">Termos e condições de uso</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12 widget-area">
                <div class="footer-widget">
                    <h3 class="footer-title">Contact</h3>
                    <div class="Phone">
                        <div class="img">
                            <a href="{{ route('contact') }}">
                                <img src="{{ url('storage/images/footer/call.png') }}" alt="">
                            </a>
                        </div>
                        <div class="title-box">
                            <h5 class="title">Telefone</h5>
                            <p>+55 48 4042-1941</p>
                        </div>
                    </div>
                    <div class="Email">
                        <div class="img">
                            <a href="{{ route('contact') }}">
                                <img src="{{ url('storage/images/footer/email.png') }}" alt="">
                            </a>
                        </div>
                        <div class="title-box">
                            <h5 class="title">E-mail</h5>
                            <p>contato@inusiart.com.br</p>
                        </div>
                    </div>
                    <div class="Location">
                        <div class="img">
                            <a href="{{ route('contact') }}">
                                <img src="{{ url('storage/images/footer/location.png') }}" alt="">
                            </a>
                        </div>
                        <div class="title-box">
                            <h5 class="title">Localização</h5>
                            <p>Tijucas, SC</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="row align-items-center">
            <div class="container">
                <div class="footer-bottom-home footer-bottom-pb footer-bottom-pt w-100">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-6 col-12">
                            <p>Inusiart 2023. Todos os direitos reservados.</p>
                        </div>
                        <div class="col-md-6 col-lg-6 col-12">
                            <ul class="ekit-team-social-list">
                                <li>
                                    <a>
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li>
                                    <a>
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
