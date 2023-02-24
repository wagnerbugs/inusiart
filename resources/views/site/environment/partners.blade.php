@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper home-03">

    @include('site.commom.header')

    <!-- How We work-->
    <div class="work-area pt-100 pb-100">
        <div class="container">
            <div class="work-title text-center">
                <h2>Seja um franqueado</h2>
                <p>Todo o nosso know How na indústria de móveis planejados em diversos modelos de negócios que se adaptam a sua região de atuação.</p>
            </div>
            <div class="row work-cover">
                <div class="col-lg-4 col-md-4">
                    <div class="work-info">
                        <h2>A</h2>
                        <h3>Show Room</h3>
                        <p>Tenha um espaço com diversos modelos de ambientações para maximar a prospecção de novos clientes. Indicado para Designer de Interiores e Projetistas de ambientes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="work-info">
                        <h2>B</h2>
                        <h3>Loja</h3>
                        <p>Uma loja de móveis com nossas coleções, sempre renovadas, com a qualidade que a Inusiart mantém à mais de 20 anos. Indicado para empreendedores no ramo de móveis.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="work-info">
                        <h2>C</h2>
                        <h3>For us, for you</h3>
                        <p>Um modelo de franquia corporativa explorando a sua marca, com a assinatura Inusiart. Com toda nossa equipe de Designer e fábrica ao seu dispor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials-->
    <div class="testimonials-area">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="testimonials col-12 p-0">
                    <div class="col-lg-6 col-md-12 p-0">
                        <a href="#">
                            <img src="{{ url('storage/images/testimonial/t-01.jpg') }}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 p-0">
                        <div class="testimonials-elementor">
                            <h2>Nossos franqueados</h2>
                            <p>A voz de quem vestiu a camisa Inusiart</p>
                        </div>
                        <div class="testimonials-active-1 owl-carousel">
                            <div class="single-testimonials d-flex col-12">
                                <div class="client-info">
                                    <p>Depoimento da cliente</p>
                                    <div class="testimonials-details">
                                        <div class="testimonials-img">
                                            <a href="#">
                                                <img src="{{ url('storage/images/testimonial/client-1.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonials-text">
                                            <h3>Jader Pereira</h3>
                                            <p>Designer de interiores</p>
                                        </div>

                                    </div>
                                    <div class="testimonials-icon">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonials d-flex col-12">
                                <div class="client-info">
                                    <p>Depoimento</p>
                                    <div class="testimonials-details">
                                        <div class="testimonials-img">
                                            <a href="#">
                                                <img src="{{ url('storage/images/testimonial/client-2.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonials-text">
                                            <h3>Alberto Júnior</h3>
                                            <p>Designer</p>
                                        </div>

                                    </div>
                                    <div class="testimonials-icon">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonials d-flex col-12">
                                <div class="client-info">
                                    <p>Depoimento.</p>
                                    <div class="testimonials-details">
                                        <div class="testimonials-img">
                                            <a href="#">
                                                <img src="{{ url('storage/images/testimonial/client-3.png') }}" alt="">
                                            </a>
                                        </div>
                                        <div class="testimonials-text">
                                            <h3>Jonathan Bruno</h3>
                                            <p>Empresário</p>
                                        </div>

                                    </div>
                                    <div class="testimonials-icon">
                                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact us -->
    <div class="contact-us-area">
        <div class="container">
            <div class="row">
                <div class="contact col-12 p-0">
                    <div class="col-xl-6 col-lg-6 col-md-12 p-0">
                        <div class="contact-info">
                            <h2>Ficou interessado ou tem dúvidas</h2>
                            <p>Entre em contato com nossa equipe de atendimento ou venha tomar um café conosco e falar de suas ideias.</p>
                            <div class="contact-text">
                                <h3 class="contact-title">Tijucas - SC</h3>
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">(+55) 48 2345 1234</a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">parceiros@inusiart.com.br</a></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Rua Vilson Lemos, 2850</a></li>
                                </ul>
                            </div>
                            <div class="contact-text">
                                <h3 class="contact-title">Interlagos - SP</h3>
                                <ul>
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="#">(+55) 11 2345 1234</a></li>
                                    <li><i class="fa fa-envelope" aria-hidden="true"></i><a href="#">parceiros@inusiart.com.br</a></li>
                                    <li><i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Segunda Avenida, 340</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 p-0">
                        <div class="contact-form-area">
                            <form action="{{ route('send.contact') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="name" type="text" placeholder="Seu nome">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="email" type="email" placeholder="Seu e-mail">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <input name="phone" type="text" placeholder="Seu telefone ou Whatsapp">
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-12">
                                        <textarea name="message" placeholder="Mensagem"></textarea>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <button class="submit" type="submit">Enviar</button>
                                    </div>

                                </div>
                            </form>
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
