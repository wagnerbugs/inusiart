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
                    <h2>Quem somos</h2>
                    <p>Indústria Inusiart</p>

                </div>
            </div>
        </div>
    </div>
    <div class="about-us-area pt-100 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-12">
                    <div class="about-us-content">
                        <h2>Fábrica Inusiart</h2>
                        <div class="qodef-separator-holder ">
                            <div class="qodef-separator"></div>
                        </div>
                        <p>A fábrica Inusiart possui mais de 2.000 m² com modernos equipamentos de alta tecnologia que permitem maior precisão nos cortes e na furação, garantindo assim móveis com ótimo acabamento e duradouros. Trabalhamos com os melhores fornecedores de matéria prima, corrediças, puxadores e acessórios, para assegurar um produto de excelente qualidade.</p>
                        <p>Estamos sempre atualizados no mercado, apresentando aos nossos clientes, o que há de mais recente em tecnologias e tendências. A constante atualização e o desejo de transformar impulsionam a marca em busca de novidades para acompanhar a necessidade dos clientes, evoluindo e criando soluções eficientes para torná-la referência no ramo de fabricação de móveis sob medida.</p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="about-us-img">
                        <div class="about-img-1">
                            <img src="{{ url('storage/images/industry/img_sobre_fabricas.jpg') }}" alt="">
                        </div>
                        <div class="wpb-wrapper">
                            <h6>Fábrica: Tijucas/SC</h6>
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
                                <span class="back-title">Diferenciais </span>
                                <h3>Diferenciais</h3>
                                <div class="qodef-separator-holder ">
                                    <div class="qodef-separator"></div>
                                </div>
                                <p>Promob Start Studio Inusiart próprio, com humanização e renderização</p>
                                <p>Plano de corte integrado com Promob</p>
                                <p>Colagem de fita de 0,45 mm e 1,0 mm</p>
                                <p>Produção de tamburato de 45 mm</p>
                                <p>Painéis editáveis</p>
                                <p>Módulos editáveis milimetro a milimetro</p>
                                <p>Embalagem com plástico cantoneira plástica e plástico bolha</p>
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
                <h2>Conheça nossa fábrica</h2>
                <div class="qodef-separator-holder ">
                    <div class="qodef-separator"></div>
                </div>
                <p>Venha conhecer nossa fábrica moderna, tecnologia à favor da precisão !</p>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('site.commom.footer')

    {{-- Modal --}}
    @include('site.commom.modal')

</main>

@endsection
