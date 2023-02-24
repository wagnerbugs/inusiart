
<header class="header-area">
    <div class="header-large-device">
        <div class="header-bottom">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo logo-res-lg">
                            <a href="{{ route('index') }}">
                                <img src="{{ url('storage/images/logo/logo_inusiart.png') }}" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-menu menu-lh-1 main-menu-padding-1 menu-text-white main-menu-padding1">
                            <nav>
                                <ul>
                                    <li>
                                        <a class="active" href="{{ route('index') }}">Início</a>
                                    </li>
                                    <li>
                                        <a href="#">Institucional</a>
                                        <ul class="sub-menu-width">
                                            <li><a href="{{ route('about') }}">Sobre nós</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">A Inusiart</a>
                                        <ul class="mega-menu-style-2 mega-menu-width2 menu-negative-mrg2">
                                            <li class="mega-menu-sub-width50"><a class="menu-title" href="#">INDÚSTRIA</a>
                                                <ul>
                                                    <li><a href="{{ route('industry.about') }}">Sobre</a></li>
                                                    <li><a href="{{ route('industry.services') }}">Serviços</a></li>
                                                    <li><a href="{{ route('industry.faq') }}">Perguntas frequentes</a></li>
                                                    <li><a href="{{ route('industry.partners') }}">Seja um parceiro</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width50"><a class="menu-title" href="#">LOJAS</a>
                                                <ul>
                                                    <li><a href="{{ route('environment.about') }}">Sobre</a></li>
                                                    <li><a href="{{ route('environment.services') }}">Serviços</a></li>
                                                    <li><a href="{{ route('environment.partners') }}">Seja um franqueado</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('shop') }}">Shop</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('contact') }}">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end">
                        <div class="header-right-wrap header-right-flex">
                            <div class="same-style same-style-mrg-dec">
                                <a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                            <div class="same-style same-style-mrg-dec">
                                <a href="{{ route('shop.cart') }}"><i class="fa fa-shopping-cart"></i>
                                    <span>0</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-small-device bg-main">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6">
                    <div class="mobile-logo mobile-logo-width">
                        <a href="{{ route('index') }}">
                            <img src="{{ url('storage/images/logo/logo_inusiart.png') }}" alt="Logo" >
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap header-right-flex">
                        <div class="same-style same-style-mrg-dec">
                            <a href="{{ route('login') }}"><i class="fa fa-user-o"></i></a>
                        </div>
                        <div class="same-style">
                            <a class="cart-active" href="{{ route('shop.cart') }}"><i class="fa fa-cart-arrow-down"></i></a>
                        </div>
                        <div class="same-style">
                            <a class="mobile-menu-button-active" href="#"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

{{-- Minicart on Menu --}}
@include('site.commom._partials.cart-menu')

{{-- Mobile menu start --}}
<div class="mobile-menu-active clickalbe-sidebar-wrapper-style-1">
    <div class="clickalbe-sidebar-wrap">
        <a class="sidebar-close"><i class=" ti-close "></i></a>
        <div class="mobile-menu-content-area sidebar-content-100-percent">
            <div class="mobile-search">
                <form class="search-form" action="#">
                    <input type="text" placeholder="Buscar no site">
                    <button class="button-search"><i class=" ti-search "></i></button>
                </form>
            </div>
            <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                <nav>
                    <ul>
                        <li>
                            <a href="{{ route('index') }}">Início</a>
                        </li>
                        <li class="has-sub-menu">
                            <a href="#">Institucional</a>
                            <ul class="sub-menu-2">
                                <li><a href="{{ route('about') }}">Sobre nós</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">A Inusiart</a>
                            <ul class="sub-menu-2">
                                <li class="has-sub-menu"><a href="#">Indústria</a>
                                    <ul class="sub-menu-2">
                                        <li><a href="{{ route('industry.about') }}">Sobre</a></li>
                                        <li><a href="{{ route('industry.services') }}">Serviços</a></li>
                                        <li><a href="{{ route('industry.faq') }}">Perguntas frequentes</a></li>
                                        <li><a href="{{ route('industry.partners') }}">Seja um parceiro</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub-menu"><a href="#">Lojas e Ambientes decorados</a>
                                    <ul class="sub-menu-2">
                                        <li><a href="{{ route('environment.about') }}">Sobre</a></li>
                                        <li><a href="{{ route('environment.services') }}">Serviços</a></li>
                                        <li><a href="{{ route('environment.partners') }}">Seja um franqueado</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('blog') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('shop') }}">Shop</a>
                        </li>
                        <li>
                            <a href="{{ route('contact') }}">Contato</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="header-aside-content">
                <div class="social-icon-style-2 mb-25">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
