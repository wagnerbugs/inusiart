@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper">

    @include('site.commom.header')

    {{-- Slider --}}
    @include('site._partials.slider')

    <!--- philosophy--->
    <div class="philosophy-area">
        <div class="container">
            <div class="row">
                <div class="philosophy-cover">
                    <div class="col-lg-5 col-md-12">
                        <div class="philosophy-content">
                            <h3><span class="headline">FILOSOFIA</span></h3>
                            <h2>A proposta</h2>
                            <p>Bem-vindo ao site da Inusiart, especialista em terceirização de produção de móveis. Nós acreditamos que terceirizar sua produção de móveis pode trazer muitos benefícios para sua empresa e gostaríamos de compartilhar alguns deles com você.</p>
                            <div class="button-icon">
                                <a class="button-text" href="#" >Saiba mais<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="image-stack">
                            <div class="image-stack-top">
                                <a href="#">
                                    <img src="{{ url('storage/images/cms/01.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="image-stack-bottom">
                                <a href="#">
                                    <img src="{{ url('storage/images/cms/02.jpg') }}" alt="">
                                </a>
                            </div>
                            <div class="image-stack-bottom-01">
                                <a href="#">
                                    <img src="{{ url('storage/images/cms/03.jpg') }}" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- start count stats -->
        <section id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-12 stats">
                        <div class="count">2000</div>
                        <h5>ÁREA DE FÁBRICA</h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 stats">
                        <div class="count">542</div>
                        <h5>PARCEIROS</h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 stats">
                        <div class="count">43</div>
                        <h5>FUNCIONÁRIOS</h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 stats">
                        <div class="count">40000</div>
                        <h5>+ PROJETOS FINALIZADOS</h5>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Light and Shadow -->
    <div class="Light-Shadow">
        <div class="since-text">
            <h5>Desde 2004</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="light-shadow-cover">
                    <div class="col-lg-5 col-md-5">
                        <div class="Light-Shadow-text">
                            <h3><span class="headline">Inusiart</span></h3>
                            <h2>Credibilidade e Compromisso</h2>
                            <p>A Inusiart é uma fábrica de móveis sob medida com 17 anos de experiência no mercado e mais de 2 mil metros quadrados de parque fabril. Localizada em Tijucas, entre Florianópolis e Navegantes, oferece fácil acesso a BR-101 para escoamento de produção.</p>
                            <div class="Button-Widget-genesis">
                                <a href="#" class="Button-Widget">
                                    <div class="Button-Content">
                                        <span>View All Locations</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- choose your type -->
    <div class="portfolio-area section-padding-1 pb-100">
        <div class="container-fluid p-0">
            <div class="portfolio-active owl-carousel">
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <a href="#">
                            <img src="{{ url('storage/images/product/a-01.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="portfolio-gallery-wrap portfolio-gallery">
                        <div class="portfolio-gallery-bg">
                            <div class="portfolio-content">
                                <span class="portfolio-title title-font">Apartment Cambridge</span>
                                <span class="portfolio-caption">Apartment</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <a href="#">
                            <img src="{{ url('storage/images/product/a-02.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="portfolio-gallery-wrap portfolio-gallery">
                        <div class="portfolio-gallery-bg">
                            <div class="portfolio-content">
                                <span class="portfolio-title title-font">Studio builds</span>
                                <span class="portfolio-caption">Project Design</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <a href="#">
                            <img src="{{ url('storage/images/product/a-03.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="portfolio-gallery-wrap portfolio-gallery">
                        <div class="portfolio-gallery-bg">
                            <div class="portfolio-content">
                                <span class="portfolio-title title-font">Housing Block Building</span>
                                <span class="portfolio-caption">High Rise</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <a href="#">
                            <img src="{{ url('storage/images/product/a-04.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="portfolio-gallery-wrap portfolio-gallery">
                        <div class="portfolio-gallery-bg">
                            <div class="portfolio-content">
                                <span class="portfolio-title title-font">The New-York</span>
                                <span class="portfolio-caption">Design Interiors</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <a href="#">
                            <img src="{{ url('storage/images/product/a-05.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="portfolio-gallery-wrap portfolio-gallery">
                        <div class="portfolio-gallery-bg">
                            <div class="portfolio-content">
                                <span class="portfolio-title title-font">Global Terfa</span>
                                <span class="portfolio-caption">Architecture</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <a href="#">
                            <img src="{{ url('storage/images/product/a-06.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="portfolio-gallery-wrap portfolio-gallery">
                        <div class="portfolio-gallery-bg">
                            <div class="portfolio-content">
                                <span class="portfolio-title title-font">Oasis Terraces Projects</span>
                                <span class="portfolio-caption">Architecture</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="portfolio-wrap">
                    <div class="portfolio-img">
                        <a href="#">
                            <img src="{{ url('storage/images/product/a-07.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="portfolio-gallery-wrap portfolio-gallery">
                        <div class="portfolio-gallery-bg">
                            <div class="portfolio-content">
                                <span class="portfolio-title title-font">Pine of Renzo Residence</span>
                                <span class="portfolio-caption">Architecture home</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---Luxury Town Houses---->
    <section class="luxury-town-houses pb-100">
        <div class="container">
            <div class="luxury-houses col-lg-12">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-sm-12 p-0">
                        <div class="luxury-houses-img">
                            <img src="{{ url('storage/images/cms/pattern.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="luxury-houses-area col-lg-8 col-sm-12">
                        <div class="luxury-houses-info col-lg-7 col-md-7 col-sm-12">
                            <div class="luxury-houses-text">
                                <h2>Visite nossa loja online</h2>
                                <h3>Itens únicos e exclusivos para sua casa e escritório</h3>
                            </div>
                        </div>
                        <div class="luxury-houses-info col-lg-5 col-md-5 col-sm-12">
                            <div class="luxury-houses-services">
                                <div class="Button-Widget-genesis">
                                    <a href="#" class="Button-Widget">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---- services item ----->
    <div class="services-item-area pt-100 pb-100">
        <div class="container">
            <div class="title-headline">
                <h3><span class="headline">NESTIN HOUSE</span></h3>
                <h2>Designed to meet the<br> highest criteria</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 ">
                    <div class="services-item">
                        <img src="{{ url('storage/images/service/icon1.png') }}" alt="">
                        <h4>PROJECT MANAGEMENT</h4>
                        <p>Capitalize on low hanging fruit to identify a ballpark value added activity.</p>
                        <div class="button-icon">
                            <a class="button-text" href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="{{ url('storage/images/service/icon2.png') }}" alt="">
                        <h4>SOLAR PANELS</h4>
                        <p>To beta test override the digital divide with additional clickthroughs from.</p>
                        <div class="button-icon">
                            <a class="button-text" href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="{{ url('storage/images/service/icon3.png') }}" alt="">
                        <h4>NATURAL ENVIRONMENT</h4>
                        <p>DevOps nanotechnology immersion along the information highway will.</p>
                        <div class="button-icon">
                            <a class="button-text" href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="services-item">
                        <img src="{{ url('storage/images/service/icon4.png') }}" alt="">
                        <h4>URBAN PLANNING</h4>
                        <p>Close the loop on focusing solely on the bottom line capitalize on low hanging.</p>
                        <div class="button-icon">
                            <a class="button-text" href="#">View project<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <div class="blog-area section-padding-1 pt-100 pb-60">
        <div class="container">
            <div class="title-headline">
                <h3><span class="headline">FIQUE POR DENTRO</span></h3>
                <h2>Últimas postagens</h2>
            </div>
            <div class="row">
                @foreach ($posts as $post)
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 blog-round">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ url('storage/images/blog/'.$post->image) }}" alt="{{ $post->title }}">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>Por<a href="#"> {{ $post->admin->name }} </a></li>
                                    <li>-</li>
                                    <li><a href="#">{{ $post->created_at }}</a></li>
                                </ul>
                            </div>
                            <h3><a href="{{ route('blog.show', $post->slug) }}">{{ $post->subtitle }}</a></h3>
                            <div class="qodef-separator"></div>
                            <p>{{ $post->title }}</p>
                            <div class="Button-Widget-genesis">
                                <a href="{{ route('blog.show', $post->slug) }}" class="Button-Widget">
                                    <div class="Button-Content">
                                        <span>Ler postagem</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="testimonial-area bg-gray pt-100 pb-100">
        <div class="container">
            <div class="title-text">
                <h3><span class="headline">DEPOIMENTOS</span></h3>
                <h2>+40.000 Clientes satisfeitos</h2>
            </div>
            <div class="testimonial-active owl-carousel">
                <div class="single-testimonial d-flex col-12">
                    <div class="client-info">
                        <i class="fa fa-quote-right"></i>
                        <h4><span>Lorran Barentin</span> / Diretor Jornal Razão</h4>
                        <p>Todo o design do nosso estúdio de PodCasts feito com excelente qualidade e muito bom gosto.</p>
                    </div>
                </div>
                <div class="single-testimonial d-flex">
                    <div class="single-testimonial d-flex col-12">
                        <div class="client-info">
                            <i class="fa fa-quote-right"></i>
                            <h4><span>Wagner Bugs</span> / Cliente final</h4>
                            <p>Fizemos o projeto de nossa cozinha e ficou perfeito, milímetro por milímetro de pura qualidade. Recomendo.</p>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial d-flex ">
                    <div class="single-testimonial d-flex col-12">
                        <div class="client-info">
                            <i class="fa fa-quote-right"></i>
                            <h4><span>Maritza Pereira</span> / Designer de Interior</h4>
                            <p>Já são anos trabalhando com a Inusiart. Destaco o cuidado, pontualidade e compromisso de todos os profissionais.</p>
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
