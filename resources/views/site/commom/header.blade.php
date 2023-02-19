<div class="grid-lines-holder">
    <div class="grid-line grid-column-1"></div>
    <div class="grid-line grid-column-2"></div>
    <div class="grid-line grid-column-3"></div>
    <div class="grid-line grid-column-4"></div>
    <div class="grid-line grid-column-5"></div>
</div>
<header class="header-area">
    <div class="header-large-device">
        <div class="header-bottom">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo logo-res-lg">
                            <a href="{{ route('index') }}">
                                <img src="{{ url('storage/images/logo/logo.png') }}" alt="logo Inusiart">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="main-menu menu-lh-1 main-menu-padding-1 menu-text-white main-menu-padding1">
                            <nav>
                                <ul>
                                    <li><a class="active" href="index.html">Home</a>
                                        <ul class="sub-menu-width">
                                            <li><a href="home-02.html">Home-02</a></li>
                                            <li><a href="home-03.html">Home-03</a></li>
                                            <li><a href="home-04.html">Home-04</a></li>
                                            <li><a href="home-05.html">Home-05</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Pages</a>
                                        <ul class="sub-menu-width">
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="faq.html">FAQ</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="contact.html">Contact Page</a></li>
                                            <li><a href="coming-soon.html">Comming Soon</a></li>
                                            <li><a href="empty-cart.html">Empty Cart</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop-fullwide.html">Shop</a>
                                        <ul class="mega-menu-style-2 mega-menu-width2 menu-negative-mrg3">
                                            <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Layout</a>
                                                <ul>
                                                    <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                                    <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                                    <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                                    <li><a href="shop-list-style.html">Shop List Style</a></li>
                                                    <li><a href="order-tracking.html">Order Tracking</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width22"><a class="menu-title" href="#">Product Layout</a>
                                                <ul>
                                                    <li><a href="product-details.html">Product Details</a></li>
                                                    <li><a href="product-details-group.html">Grouped</a></li>
                                                    <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                                    <li><a href="product-details-video.html">Video</a></li>
                                                    <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-sub-width20"><a class="menu-title" href="#">Shop Pages</a>
                                                <ul>
                                                    <li><a href="my-account.html">My Account</a></li>
                                                    <li><a href="checkout.html">Check Out</a></li>
                                                    <li><a href="cart.html">Shopping Cart</a></li>
                                                    <li><a href="wishlist.html">Wishlist</a></li>
                                                    <li><a href="login-register.html">login / register</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog</a>
                                        <ul class="sub-menu-width">
                                            <li><a href="blog-layout-02.html">Blog Layout</a></li>
                                            <li><a href="blog.html">Blog Page</a></li>
                                            <li><a href="blog-no-sidebar.html">Blog No sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end">
                        <div class="header-right-wrap header-right-flex">
                            <div class="same-style same-style-mrg-dec">
                                <a href="login-register.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                            </div>
                            <div class="same-style same-style-mrg-dec">
                                <a href="cart.html"><i class="fa fa-shopping-cart"></i>
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
                            <img src="{{ url('storage/images/logo/logo.png') }}" alt="Logo Inusiart">
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="header-right-wrap header-right-flex">
                        <div class="same-style same-style-mrg-dec">
                            <a href="login-register.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                        </div>
                        <div class="same-style">
                            <a class="cart-active" href="cart.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                <span>0</span>
                            </a>
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
                    <input type="text" placeholder="Search entire store…">
                    <button class="button-search"><i class=" ti-search "></i></button>
                </form>
            </div>
            <div class="clickable-mainmenu-wrap clickable-mainmenu-style1">
                <nav>
                    <ul>
                        <li class="has-sub-menu"><a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="home-02.html">Home-02</a></li>
                                <li><a href="home-03.html">Home-03</a></li>
                                <li><a href="home-04.html">Home-04</a></li>
                                <li><a href="home-05.html">Home-05</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">Pages</a>
                            <ul class="sub-menu-2">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Page</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="coming-soon.html">Comming Soon</a></li>
                                <li><a href="empty-cart.html">Empty Cart</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">shop</a>
                            <ul class="sub-menu-2">
                                <li class="has-sub-menu"><a href="#">Shop Layout</a>
                                    <ul class="sub-menu-2">
                                        <li><a href="shop-fullwide.html">Shop Fullwidth</a></li>
                                        <li><a href="shop-sidebar.html">Shop Sidebar</a></li>
                                        <li><a href="shop-3-col.html">Shop 03 Columns</a></li>
                                        <li><a href="shop-list-style.html">Shop List Style</a></li>
                                        <li><a href="order-tracking.html">Order Tracking</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub-menu"><a href="#">Product Layout</a>
                                    <ul class="sub-menu-2">
                                        <li><a href="product-details.html">Single 01</a></li>
                                        <li><a href="product-details-group.html">Grouped</a></li>
                                        <li><a href="product-details-sticky.html">Sticky Info</a></li>
                                        <li><a href="product-details-video.html">Video</a></li>
                                        <li><a href="product-details-affiliate.html">Affiliate</a></li>
                                    </ul>
                                </li>
                                <li class="has-sub-menu"><a href="#">Shop Page</a>
                                    <ul class="sub-menu-2">
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="checkout.html">Check Out</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="login-register.html">login / register</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub-menu"><a href="#">Blog</a>
                            <ul class="sub-menu-2">
                                <li><a href="blog-layout-02.html">Blog layout</a></li>
                                <li><a href="blog.html">Blog Page</a></li>
                                <li><a href="blog-no-sidebar.html">Blog No sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-aside-content">
                <div class="social-icon-style-2 mb-25">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                    <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
