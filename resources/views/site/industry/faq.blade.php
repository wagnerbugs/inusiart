@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper">

    @include('site.commom.header')

    <div class="breadcrumb-area section-padding-1 breadcrumb-ptb-1">
        <div class="container">
            <div class="breadcrumb-content text-left">
                <div class="breadcrumb-title">
                    <p>Perguntas Frequentes</p>
                    <h2>FAQ</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="faq-area">
        <div class="single-faq-wrap pb-100">
            <div class="container">
                <div class="faq-title mb-60">
                    <h2>Principais dúvidas</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel-group" id="accordion">
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion1" href="#faq-accordion1">
                                            Há alguma taxa ou mensalidade para fazer a parceria ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion1" data-parent="#accordion" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta da pergunda </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion2" href="#faq-accordion2">
                                            Meu cliente saberá que foram vocês que fabricaram o projeto ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion2" data-parent="#accordion" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion3" href="#faq-accordion3">
                                            Vocês entregam no destino do cliente ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion3" data-parent="#accordion" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion4" href="#faq-accordion4">
                                            Vocês trabalham com financiamento ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion4" data-parent="#accordion" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion5" href="#faq-accordion5">
                                            Vocês utilizam o PROMOB ou outro aplicativo ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion5" data-parent="#accordion" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="panel-group" id="accordion2">
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion6" href="#faq-accordion6">
                                            E se cliente solicitou uma mudança após ter enviado para produção?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion6" data-parent="#accordion2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion7" href="#faq-accordion7">
                                            Qual é a garantia oferecida  ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion7" data-parent="#accordion2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion8" href="#faq-accordion8">
                                            Como faço para acompanhar a produção ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion8" data-parent="#accordion2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion9" href="#faq-accordion9">
                                            Tem algum valor mínimo por projeto ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion9" data-parent="#accordion2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel faq-accordion mb-20">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="collapsed" data-toggle="collapse" data-target="#faq-accordion10" href="#faq-accordion10">
                                            Posso levar um cliente para visitar a fábrica ?
                                        </a>
                                    </h4>
                                </div>
                                <div id="faq-accordion10" data-parent="#accordion2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Resposta</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="team-area pt-120 pb-90">
        <div class="container">
            <div class="team-title-text text-center mb-65">
                <h2>Suporte Inusiart</h2>
                <div class="qodef-separator-holder ">
                    <div class="qodef-separator"></div>
                </div>
                <p>Entre em contato para tirar suas dúvidas.</p>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('site.commom.footer')

    {{-- Modal --}}
    @include('site.commom.modal')

</main>

@endsection
