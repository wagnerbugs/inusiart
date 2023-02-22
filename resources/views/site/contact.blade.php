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
                    <h2>Fale conosco</h2>
                    <p>Caso tenha alguma dúvida, por favor entre em contato com nossa equipe.</p>

                </div>
            </div>
        </div>
    </div>
    <div class="contact-us-area pt-120 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="contact-form-area">
                        <form id="contact-form" action="{{ route('send.contact') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">
                                    <input name="name" type="text" placeholder="Nome">
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <input name="email" type="email" placeholder="E-mail">
                                </div>
                                <div class="col-lg-6 col-md-12 col-12">
                                    <input name="phone" type="text" placeholder="Telefone">
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
    <div class="contact-all-info pb-60">
        <div class="row">
            <div class="container">
                <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12 contact-info">
                    <div class="contact-wrap">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h3>INDUSTRIA</h3>
                            <p>Rua Vilson Lemos, nº 2850<br>
                                Santa Luzia - Tijucas SC<br>
                                55 (48) 4042-1941 / 4042-1943</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12 contact-info">
                    <div class="contact-wrap">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h3>AMBIENTES PLANEJADOS</h3>
                            <p>Segunda Avenida, 340,<br>
                                Meia Praia - Itapema - SC<br>
                                55 47 3368-8526</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12 contact-info">
                    <div class="contact-wrap">
                        <div class="contact-icon">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h3>INUSIART DESIGN</h3>
                            <p>Rua 3.144, n. 93, sala 02<br>
                                Balneário Camboriú - SC<br>
                                55 47 2125-9307</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-xs-12 contact-info">
                    <div class="contact-wrap">
                        <div class="contact-icon">
                            <i class="fa fa-hourglass-end" aria-hidden="true"></i>
                        </div>
                        <div class="contact-text">
                            <h3>ATENDIMENTO</h3>
                            <p>Seg – Sex: 9h – 18h</p>
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
