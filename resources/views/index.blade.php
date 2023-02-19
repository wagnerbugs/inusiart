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
                            <h3><span class="headline">PHILOSOPHY</span></h3>
                            <h2>The Idea</h2>
                            <p>Each property is given individual consideration. Through a process of in-depth research and discovery we identify each property’s innate qualities. Guided by our philosophy we seek to enhance the singular characteristics presented in each property that are as particular. Organically grow the holistic world view of disruptive innovation.</p>
                            <div class="button-icon">
                                <a class="button-text" href="#" >View More<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
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
                        <div class="count">1778</div>
                        <h5>SQUARE METERS</h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 stats">
                        <div class="count">15</div>
                        <h5>SEPARATE VILLAS</h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 stats">
                        <div class="count">20</div>
                        <h5>MILES FROM THE CITY</h5>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-12 stats">
                        <div class="count">2021</div>
                        <h5>PROJECT FINISH</h5>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Light and Shadow -->
    <div class="Light-Shadow">
        <div class="since-text">
            <h5>Since 2004</h5>
        </div>
        <div class="container">
            <div class="row">
                <div class="light-shadow-cover">
                    <div class="col-lg-5 col-md-5">
                        <div class="Light-Shadow-text">
                            <h3><span class="headline">INTERIORS</span></h3>
                            <h2>Light and Shadow </h2>
                            <p>Founded by Robert Downey Jr in 2004, we’re an employee-owned firm pursuing a democratic design process that values everyone’s input. Today we have more than 150 people in London, Hong Kong and Sydney providing architecture, interior &amp; urban design services from concept to completion.</p>
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
                                <h2>Luxury Town Houses</h2>
                                <h3>from $999 000</h3>
                            </div>
                        </div>
                        <div class="luxury-houses-info col-lg-5 col-md-5 col-sm-12">
                            <div class="luxury-houses-services">
                                <div class="Button-Widget-genesis">
                                    <a href="#" class="Button-Widget">
                                        <i class="fa fa-mobile" aria-hidden="true"></i>
                                        <div class="service-content-title">
                                            <div class="service-content-supertitle">Call us Now</div>
                                            <div class="service-title">+1 800 555 123</div>
                                        </div>
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
                <h3><span class="headline">PROPERTY AMENITIES</span></h3>
                <h2>Latest Blog</h2>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 blog-round">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ url('storage/images/blog/blog-01.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>By<a href="#"> June 10, 2021 </a></li>
                                    <li>-</li>
                                    <li><a href="#">11 Dec 2021</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Warm Luxury </a></h3>
                            <div class="qodef-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor nus indididunt ut labore etis... </p>
                            <div class="Button-Widget-genesis">
                                <a href="#" class="Button-Widget">
                                    <div class="Button-Content">
                                        <span>know More</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 blog-round">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ url('storage/images/blog/blog-02.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <ul>
                                    <li>By <a href="#"> John Doe</a></li>
                                    <li>-</li>
                                    <li><a href="#">17 Dec 2021</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Great Guide </a></h3>
                            <div class="qodef-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor nus indididunt ut labore etis... </p>
                            <div class="Button-Widget-genesis">
                                <a href="#" class="Button-Widget">
                                    <div class="Button-Content">
                                        <span>know More</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-12 blog-round">
                    <div class="blog-wrap">
                        <div class="blog-img">
                            <a href="blog-details.html">
                                <img src="{{ url('storage/images/blog/blog-03.jpg') }}" alt="">
                            </a>
                        </div>
                        <div class="blog-content ">
                            <div class="blog-meta">
                                <ul>
                                    <li>By <a href="#"> John Doe</a></li>
                                    <li>-</li>
                                    <li><a href="#">10 Dec 2021</a></li>
                                </ul>
                            </div>
                            <h3><a href="blog-details.html">Calm Afternoon </a></h3>
                            <div class="qodef-separator"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor nus indididunt ut labore etis... </p>
                            <div class="Button-Widget-genesis">
                                <a href="#" class="Button-Widget">
                                    <div class="Button-Content">
                                        <span>know More</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonial -->
    <div class="testimonial-area bg-gray pt-100">
        <div class="container">
            <div class="title-text">
                <h3><span class="headline">MATERIALS</span></h3>
                <h2>+2,500 Happy Clients</h2>
            </div>
            <div class="testimonial-active owl-carousel">
                <div class="single-testimonial d-flex col-12">
                    <div class="client-info">
                        <i class="fa fa-quote-right"></i>
                        <h4><span>Ryan Betthalyn</span> / Director at Chobham Manor</h4>
                        <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino staveuo at magna akal semperFusce commodo molestie luctus.Lorem ipsum ulicon Dolor tusima olatiup.</p>
                    </div>
                </div>
                <div class="single-testimonial d-flex">
                    <div class="single-testimonial d-flex col-12">
                        <div class="client-info">
                            <i class="fa fa-quote-right"></i>
                            <h4><span>Bobs Hanley</span> / Owner of Edden Villa</h4>
                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino staveuo at magna akal semperFusce commodo molestie luctus.Lorem ipsum ulicon Dolor tusima olatiup.</p>
                        </div>
                    </div>
                </div>
                <div class="single-testimonial d-flex ">
                    <div class="single-testimonial d-flex col-12">
                        <div class="client-info">
                            <i class="fa fa-quote-right"></i>
                            <h4><span>Bobs Hanley</span> / Owner of Edden Villa</h4>
                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. Rubino staveuo at magna akal semperFusce commodo molestie luctus.Lorem ipsum ulicon Dolor tusima olatiup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brand Slider -->
    <div class="brand-logo-area pt-40 pb-40 bg-gray section-padding-3">
        <div class="container">
            <div class="brand-logo-ptb">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="brand-logo-active owl-carousel">
                            <div class="single-brand-logo">
                                <img src="{{ url('storage/images/brand-logo/01.png') }}" alt="">
                            </div>
                            <div class="single-brand-logo">
                                <img src="{{ url('storage/images/brand-logo/07.png') }}" alt="">
                            </div>
                            <div class="single-brand-logo">
                                <img src="{{ url('storage/images/brand-logo/03.png') }}" alt="">
                            </div>
                            <div class="single-brand-logo">
                                <img src="{{ url('storage/images/brand-logo/08.png') }}" alt="">
                            </div>
                            <div class="single-brand-logo">
                                <img src="{{ url('storage/images/brand-logo/05.png') }}" alt="">
                            </div>
                            <div class="single-brand-logo">
                                <img src="{{ url('storage/images/brand-logo/12.png') }}" alt="">
                            </div>
                            <div class="single-brand-logo">
                                <img src="{{ url('storage/images/brand-logo/07.png') }}" alt="">
                            </div>
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
