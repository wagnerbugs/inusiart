@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper">

    @include('site.commom.header')

    <div class="breadcrumb-area section-padding-1 breadcrumb-ptb-1 mt-5">
        <div class="container">
            <div class="breadcrumb-content text-left">
                <div class="breadcrumb-title">
                    <h2>Nossa lojas</h2>
                    <p>Inusiart Ambientes Planejados</p>
                </div>
            </div>
        </div>
    </div>
    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="about-us-content">
                        <h2>Ambientes Planejados</h2>
                        <div class="qodef-separator-holder ">
                            <div class="qodef-separator"></div>
                        </div>
                        <p>Fundada há 10 anos a Inusiart Ambiente Planejados desenvolve e executa móveis e projetos de alta qualidade ,criativos, personalizados e exclusivos.Trabalhamos sempre nos aperfeiçoando para garantir a satisfação e confiança dos nossos clientes.</p>
                        <p>Buscamos sempre aprimorar a nossa qualidade,constantemente atualizados com as novidades do mercado. Dispomos de uma variedade de produtos para atender suas necessidades, estamos à disposição para dar a melhor orientação profissional para o seu projeto.Temos atendimento personalizado e ótima condições de pagamento.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="about-us-img">
                        <div class="about-img-1">
                            <img src="{{ url('storage/images/environment/1.jpg') }}" alt="">
                            <div class="about-img-02">
                                <img src="{{ url('storage/images/environment/2.jpg') }}" alt="">
                            </div>
                        </div>

                        <div class="wpb-wrapper">
                            <h6>Ambiente planejado</h6>
                            <p>Designer : <em><strong>Inusiart</strong></em></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video wrapper -->
    <div class="video-wrapper">
        <div class="container">
            <div class="row">
                <div class="video-inner">
                    <div class="video-img">
                        <img src="{{ url('storage/images/about/about.jpg') }}" alt="">
                    </div>
                    <div class="video-btn-3 video-btn-3-yellow">
                        <a class="video-popup" href="https://www.youtube.com/watch?v=gQDaQWcGQHI"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="video-services col-lg-12 bg-main ">
                    <div class="video-services-cover">
                        <div class="col-lg-12 col-sm-12 col-md-12">
                            <div class="services-item">
                                <span class="back-title">Inusiart </span>
                                <h3>Ambientes Planejados</h3>
                                <div class="qodef-separator-holder ">
                                    <div class="qodef-separator"></div>
                                </div>
                                <p>São mais de 15 lojas em Santa Catarina, Rio Grande do Sul e São Paulo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team -->
    <div class="team-area pt-120 pb-90">
        <div class="container">
            <div class="team-title-text text-center mb-65">
                <h2>Visite uma de nossas lojas </h2>
                <div class="qodef-separator-holder ">
                    <div class="qodef-separator"></div>
                </div>
                <p>Contamos com uma equipe de Designers para ajudar a finalizar<br> o seu projeto em qualquer ambiente domicilar ou comercial</p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-content">
                            <h4>Loja 1</h4>
                            <span>Segunda Avenida, 340,<br>
                                Meia Praia - Itapema - SC</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-content">
                            <h4>Loja 2</h4>
                            <span>Segunda Avenida, 340,<br>
                                Meia Praia - Itapema - SC</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-content">
                            <h4>Loja 3</h4>
                            <span>Segunda Avenida, 340,<br>
                                Meia Praia - Itapema - SC</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="team-wrapper mb-30">
                        <div class="team-content">
                            <h4>Loja 4</h4>
                            <span>Segunda Avenida, 340,<br>
                                Meia Praia - Itapema - SC</span>
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
