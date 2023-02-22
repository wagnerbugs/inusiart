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
                    <h2>Sobre nós</h2>
                    <p>Institucional</p>

                </div>
            </div>
        </div>
    </div>
    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="about-us-content">
                        <h2>Inusiart</h2>
                        <div class="qodef-separator-holder ">
                            <div class="qodef-separator"></div>
                        </div>
                        <p>Somos uma empresa que atua há 10 anos no ramo de Ambientes Planejados em Itapema. Com experiência na área, temos mão de obra especializada e comprometida com o serviço, sendo que nossa equipe de vendedores e projetistas é composta por designers e arquitetos.</p>
                        <p>A Inusiart surgiu com o intuito de oferecer aos clientes a linha de fabricação própria, instalada na mesma cidade no bairro Morretes, contando com mais de 1.500m² de área fabril, com modernos equipamentos. Trabalhamos com os melhores fornecedores de matéria prima, corrediças, puxadores e acessórios, para assegurar um produto de excelente qualidade.</p>
                        <p>Estamos sempre atualizados no mercado, apresentando aos nossos clientes, o que há de mais recente em novidades e tendências. A constante atualização e o desejo de transformar impulsionam a marca em busca de novidades para acompanhar a necessidade dos clientes, evoluindo e criando soluções eficientes para torna-la referência no ramo de fabricação de móveis sob medida.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="about-us-img">
                        <div class="about-img-1">
                            <img src="{{ url('storage/images/about/img_sobre.jpg') }}" alt="">
                            <div class="about-img-02">
                                <img src="{{ url('storage/images/about/gal_Living.jpg') }}" alt="">
                            </div>
                        </div>
                        <div class="wpb-wrapper">
                            <h6>Ambiente decorado</h6>
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
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <div class="services-item">
                                <span class="back-title">01 </span>
                                <h3>Missão</h3>
                                <div class="qodef-separator-holder ">
                                    <div class="qodef-separator"></div>
                                </div>
                                <p>Fornecer  soluções eficazes no atendimento, entrega,  e instalação de ambientes planejados respeitando sempre o compromisso acordado com o cliente</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <div class="services-item">
                                <span class="back-title">02</span>
                                <h3>Visão</h3>
                                <div class="qodef-separator-holder ">
                                    <div class="qodef-separator"></div>
                                </div>
                                <p>Ser a melhor empresa no ramo de ambientes planejados, tendo o pioneirismo e inovação como estratégia.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12 col-md-4">
                            <div class="services-item">
                                <span class="back-title">03</span>
                                <h3>Valores </h3>
                                <div class="qodef-separator-holder ">
                                    <div class="qodef-separator"></div>
                                </div>
                                <p>Ética, respeito, confiança, credibilidade e comprometimento.</p>
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
                <h2>Conheça a equipe incrível</h2>
                <div class="qodef-separator-holder ">
                    <div class="qodef-separator"></div>
                </div>
                <p>Venha conhecer nosso showroom, teremos prazer em transformar seu sonho em realidade!</p>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('site.commom.footer')

    {{-- Modal --}}
    @include('site.commom.modal')

</main>

@endsection
