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
                    <h2>O que fazemos</h2>
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
                        <h2>Terceirização da sua produção</h2>
                        <div class="qodef-separator-holder ">
                            <div class="qodef-separator"></div>
                        </div>
                        <p>Credenciamos sem custo mensal ou taxas lojistas exclusivos, projetistas, arquitetos, designers, multimarcas e pequenas e médias indústrias de móveis, fornecendo móveis sob medida no formato O&M, onde somente a marca do parceiro comercial é divulgada. Esta parceria envolve treinamento comercial para projetistas e montadores do parceiro credenciado. </p>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-12">
                    <div class="about-us-img">
                        <div class="about-img-1">
                            <img src="{{ url('storage/images/industry/img_2553.jpg') }}" alt="">
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
                                <span class="back-title">Terceirização</span>
                                <h3>Seu projeto, nossa produção</h3>
                                <div class="qodef-separator-holder ">
                                    <div class="qodef-separator"></div>
                                </div>
                                <p>Sistema de fornecimento sem franquia ou taxas mensais;</p>
                                <p>Entregamos seu pedido completo, totalmente pronto pra ser montado;</p>
                                <p>Enorme flexibilidade na modulação através do Promob Studio Inusiart, com medidas totalmente editáveis em milímetros tanto na altura, largura e profundidade, gerando custos e orçamentos automaticamente;</p>
                                <p>Grande variedade de cores, com 32 padrões em Melamina e 10 padrões em laca automotiva, nas espessuras de 6mm, 15mm, 18mm e 25mm, além de engrossurados de 41 e 44 mm e tamburatos de 45 mm;</p>
                                <p>Sistema de fixação misto utilizando VB, minifix e cavilha. Móveis sem parafusos;</p>
                                <p>Embalagem em plástico bolha e cantoneiras, garantindo durabilidade e segurança no transporte;</p>
                                <p>Utilização de máquinas de alta tecnologia, que permitem maior precisão nos cortes, na furação e acabamentos que garantem móveis perfeitos e duradouros;</p>
                                <p>Comprometimento nos prazos de entrega dos móveis, devido ao moderno sistema de produção;</p>
                                <p>Identificação com etiqueta item a item;</p>
                                <p>Baixo índice de movimentação dos produtos;</p>
                                <p>Seu pedido disponível em 30 dias!</p>
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
                <h2>Garantia Inusiart</h2>
                <div class="qodef-separator-holder ">
                    <div class="qodef-separator"></div>
                </div>
                <p>Ao constatar um problema que seja coberta pela garantia, observe se o mesmo é de fabricação ou relativo a montagem e entre em contato com a loja revendedora dos produtos INUSIART, onde os produtos foram adquiridos.</p>
                <p>Ela estará plenamente capacitada ao orientar e atender o clienteconsumidor da melhor forma e diante de cada caso concreto.</p>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('site.commom.footer')

    {{-- Modal --}}
    @include('site.commom.modal')

</main>

@endsection
