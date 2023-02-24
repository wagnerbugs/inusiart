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
                <h2>Como trabalhamos juntos</h2>
                <p>Tenha uma fábrica completa a sua disposição para projetos simples e avançados, com sua marca e sua criatividade.</p>
            </div>
            <div class="row work-cover">
                <div class="col-lg-4 col-md-4">
                    <div class="work-info">
                        <h2>01</h2>
                        <h3>Conceito</h3>
                        <p>A terceirização da fábrica é uma forma de sua empresa abtrair toda a produção e dedicar seu tempo aos seus clientes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="work-info">
                        <h2>02</h2>
                        <h3>Design</h3>
                        <p>Toda a criatividade do projeto fica por conta da sua equipe, enquanto nós faremos com precisão milimétrica cada exigência.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="work-info">
                        <h2>03</h2>
                        <h3>Parceria</h3>
                        <p>Em nossa parceria, sua empresa não tem nenhum custo mensal ou taxas, apenas o valor da produção.</p>
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
                            <h2>Parceiros</h2>
                            <p>Nossos clientes aprovam a ética, respeito, confiança, credibilidade e comprometimento</p>
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
