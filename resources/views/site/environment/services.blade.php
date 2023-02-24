@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper home-03">

    @include('site.commom.header')

    <div class="innovative-ideas-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="innovative-ideas col-12 p-0">
                    <div class="col-lg-6 col-12">
                        <div class="innovative-ideas-info">
                            <div class="innovative-ideas-img">
                                <a href="#">
                                    <img src="{{ url('storage/images/cms/about.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="video-btn-3 video-btn-3-yellow">
                                <a class="video-popup" href="https://player.vimeo.com/video/181061053?autoplay=1&amp;byline=0&amp;collections=0"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="innovative-ideas-elementor">
                            <h3>Inusiart Ambientes Planejados</h3>
                            <h2>IDEIAS INOVADORAS DESIGNS ESTILOSOS</h2>
                            <p>Móveis planejados são sinônimo de sofisticação e praticidade e esse é um dos motivos para serem desejados pela maioria das pessoas que sonha em ter uma casa para chamar de sua. Esse tipo de projeto tem acabamento perfeito e por si só já é uma forma de decoração da casa. Nossa equipe de profissionais tornam os seus desejos em realidade.</p>
                        </div>
                        <section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 stats text-center">
                                        <div class="count">25</div>
                                        <h5>Anos de experiência</h5>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 stats text-center">
                                        <div class="count">1250</div>
                                        <h5>Projetos realizados</h5>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 stats text-center">
                                        <div class="count">15</div>
                                        <h5>Lojas perto de você</h5>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 stats text-center">
                                        <div class="count">30</div>
                                        <h5>Dias de produção</h5>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Our Services -->
    <div class="our-Services-area pb-100 pt-100">
        <div class="container">
            <div class="row our-Services-cover mb-30">
                <div class="col-lg-4 col-md-4">
                    <div class="our-Services">
                        <h2>Experiência</h2>
                        <p>Nossa equipe acumula experiência em dezenas de ambientes, sejam residenciais ou comerciais.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="our-Services-info">
                        <div class="our-Services-img">
                            <img src="{{ url('storage/images/service/01.jpg') }}" alt="">
                        </div>
                        <div class="our-Services-icon">
                            <i class="fa fa-home" aria-hidden="true"></i>
                        </div>
                        <div class="our-Services-text">
                            <h4>Design Residencial</h4>
                            <p>De uma varanda até projetos de casas completos, aquele closet dos sonhos, cada ambiente personalizado maximizando o conforto e organização do ambiente.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="our-Services-info">
                        <div class="our-Services-img">
                            <img src="{{ url('storage/images/service/02.jpg') }}" alt="">
                        </div>
                        <div class="our-Services-icon">
                            <i class="fa fa-glass" aria-hidden="true"></i>
                        </div>
                        <div class="our-Services-text">
                            <h4>Design em Restaurantes</h4>
                            <p>Uma pequena recepção ou todo o seu restaurante, todos os detalhes do DNA de seu empreendimento em todos os detalhes.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row our-Services-cover">
                <div class="col-lg-4 col-md-4">
                    <div class="our-Services-info">
                        <div class="our-Services-img">
                            <img src="{{ url('storage/images/service/03.jpg') }}" alt="">
                        </div>
                        <div class="our-Services-icon">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        <div class="our-Services-text">
                            <h4>Design Corporativo</h4>
                            <p>Uma estante em seu escritório ou todo o prédio corportativo com soluções eficazes e para otimização de espaço.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="our-Services-info">
                        <div class="our-Services-img">
                            <img src="{{ url('storage/images/service/04.jpg') }}" alt="">
                        </div>
                        <div class="our-Services-icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <div class="our-Services-text">
                            <h4>Design Comercial</h4>
                            <p>Uma loja otimizada, aproveitando ao máximo todos os cantinhos, mantendo toda a requinte mantendo o máximo conforto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="our-Services-info">
                        <div class="our-Services-img">
                            <img src="{{ url('storage/images/service/05.jpg') }}" alt="">
                        </div>
                        <div class="our-Services-icon">
                            <i class="fa fa-wrench" aria-hidden="true"></i>
                        </div>
                        <div class="our-Services-text">
                            <h4>Design Industrial</h4>
                            <p>Móveis planejados, mesclados com tendência de decoração industrial garantem um estilo único para seus projetos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest projects -->
    <div class="latest-projects-area pt-100 pb-0">
        <div class="container">
            <div class="section-title text-center mb-50">
                <h3>Portfolio</h3>
                <h2>Últimos projetos</h2>
            </div>
        </div>
        <div class="container-fluid p-0">
            <div class="tab-content jump">
                <div id="projects-1" class="tab-pane active">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 p-0">
                            <div class="projects-wrap">
                                <div class="projects-img">
                                    <a href="#">
                                        <img src="{{ url('storage/images/projects/p-01.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="projects-gallery-wrap projects-gallery">
                                    <div class="projects-gallery-bg">
                                        <div class="projects-gallery-caption">
                                            <h5 class="projects-title">Design Residencial</h5>
                                            <p class="projects-content">Nossa designer aproveitou as cores e detalhes de uma cadeira antiga para desenhar uma super mesa multifuncinal, seja um pequeno escritório improvisado à uma mesa de maquiagem.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 p-0">
                            <div class="projects-wrap">
                                <div class="projects-img">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/projects/p-02.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="projects-gallery-wrap projects-gallery">
                                    <div class="projects-gallery-bg">
                                        <div class="projects-gallery-caption">
                                            <h5 class="projects-title">Design Corporativo</h5>
                                            <p class="projects-content">O famoso living room da startup apresenta uma variedade imensa de armários e prateleiras. Tudo no seu devido lugar.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 p-0">
                            <div class="projects-wrap">
                                <div class="projects-img">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/projects/p-03.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="projects-gallery-wrap projects-gallery">
                                    <div class="projects-gallery-bg">
                                        <div class="projects-gallery-caption">
                                            <h5 class="projects-title">Residencial Design</h5>
                                            <p class="projects-content">Uma belíssima e ampliada cozinha com acabamento branco mantendo o ambiente aberto e limpo.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 p-0">
                            <div class="projects-wrap">
                                <div class="projects-img">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/projects/p-04.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="projects-gallery-wrap projects-gallery">
                                    <div class="projects-gallery-bg">
                                        <div class="projects-gallery-caption">
                                            <h5 class="projects-title">Design de restaurante</h5>
                                            <p class="projects-content">Uma pequena recepção ou todo o seu restaurante, todos os detalhes do DNA de seu empreendimento em todos os detalhes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 p-0">
                            <div class="projects-wrap">
                                <div class="projects-img">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/projects/p-05.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="projects-gallery-wrap projects-gallery">
                                    <div class="projects-gallery-bg">
                                        <div class="projects-gallery-caption">
                                            <h5 class="projects-title">Design Residencial</h5>
                                            <p class="projects-content">A famíllia desejava muito espaço em armários, nossa equipe desenhou esta cozinha maravilhosa com mais de 50 espaços para armazenamento personalizado. O famoso, "cada coisa no seu devido lugar". Amamos. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 p-0">
                            <div class="projects-wrap">
                                <div class="projects-img">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/projects/p-06.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="projects-gallery-wrap projects-gallery">
                                    <div class="projects-gallery-bg">
                                        <div class="projects-gallery-caption">
                                            <h5 class="projects-title">Design Corporativo</h5>
                                            <p class="projects-content">O proprietário desejava um espaço familiar para tranquilizar o "rush" diário. </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- meet our team --->
    <div class="team-area pb-100 pt-90">
        <div class="container">
            <div class="row team-column">
                <div class="col-lg-4 col-12">
                    <div class="team-info">
                        <div class="team-box">
                            <h2>Conheça nossa equipe</h2>
                            <p>Toda nossa equipe de experientes especialista com anos de experiência em ambientação e maximização de espaço são coordenados por nossa Diretora de Design Maria Eduarda e Gerente de projetos Carla Lopes</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-info">
                        <div class="team-img">
                            <img src="{{ url('storage/images/team/t3.jpg') }}" alt="">
                            <div class="hover-area">
                                <div class="profile-icon">
                                    <ul class="ekit-team-social-list">
                                        <li>
                                            <a>
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
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
                        <div class="team-text text-center">
                            <h4>Maria Eduarda</h4>
                            <p>Diretora de Design</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="team-info">
                        <div class="team-img">
                            <img src="{{ url('storage/images/team/t4.jpg') }}" alt="">
                            <div class="hover-area">
                                <div class="profile-icon">
                                    <ul class="ekit-team-social-list">
                                        <li>
                                            <a>
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a>
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
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
                        <div class="team-text text-center">
                            <h4>Carla Lopes </h4>
                            <p>Gerente de Projetos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('site.commom.footer')

    {{-- Modal --}}
    @include('site.commom.modal')

</main>

@endsection
