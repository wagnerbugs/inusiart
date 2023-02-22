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
                    <p>Loja Inusiart</p>
                    <h2>Loja Virtual</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="shop-area section-padding-1 pb-120">
        <div class="container">
            <div class="shop-top-bar">
                <div class="shop-top-bar-right">
                    <div class="shop-tab nav">
                        <a href="#shop-1" data-toggle="tab"><i class=" ti-view-list-alt "></i></a>
                        <a href="#shop-2" class="active" data-toggle="tab"><i class=" ti-layout-grid4"></i></a>
                        <a href="#shop-3" data-toggle="tab"><i class="ti-layout-grid3"></i></a>
                    </div>
                    <div class="shop-short-by ml-40">
                        <span>Default sorting <i class="fa fa-angle-down angle-down"></i></span>
                        <ul>
                            <li class="active"><a href="#">Default sorting</a></li>
                            <li><a href="#">Sort by popularity</a></li>
                            <li><a href="#">Sort by average rating</a></li>
                            <li><a href="#">Sort by latest</a></li>
                            <li><a href="#">Sort by price: low to high</a></li>
                            <li><a href="#">Sort by price: high to low</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-content jump-3 pt-30">
                <div id="shop-1" class="tab-pane">
                    <div class="shop-list-wrap mb-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap">
                                    <div class="product-img pro-theme-color-border product-border">
                                        <a href="product-details.html">
                                            <img src="{{ url('storage/images/product/01.jpg') }}" alt="">
                                        </a>
                                        <div class="shop-list-quickview">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                                <div class="shop-list-content">
                                    <h3><a href="#">Adapt Active Noise Cancelling Headphones</a></h3>
                                    <div class="pro-list-price">
                                        <span>$50.00</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                    <div class="product-list-action">
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                        <div class="pro-list-actioncart">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                        <a title="Add to Compare" href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-list-wrap mb-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap">
                                    <div class="product-img pro-theme-color-border product-border">
                                        <a href="product-details.html">
                                            <img src="{{ url('storage/images/product/02.jpg') }}" alt="">
                                        </a>
                                        <div class="shop-list-quickview">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                                <div class="shop-list-content">
                                    <h3><a href="#">iPhone 11 Case, Heavy Duty [Military Grade] </a></h3>
                                    <div class="pro-list-price">
                                        <span>$50.00</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                    <div class="product-list-action">
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                        <div class="pro-list-actioncart">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                        <a title="Add to Compare" href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-list-wrap mb-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap">
                                    <div class="product-img pro-theme-color-border product-border">
                                        <a href="product-details.html">
                                            <img src="{{ url('storage/images/product/03.jpg') }}" alt="">
                                        </a>
                                        <div class="shop-list-quickview">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                                <div class="shop-list-content">
                                    <h3><a href="#">Libratone Track Air+ True Wireless Active Noise</a></h3>
                                    <div class="pro-list-price">
                                        <span>$50.00</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                    <div class="product-list-action">
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                        <div class="pro-list-actioncart">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                        <a title="Add to Compare" href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shop-list-wrap mb-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap">
                                    <div class="product-img pro-theme-color-border product-border">
                                        <a href="product-details.html">
                                            <img src="{{ url('storage/images/product/04.jpg') }}" alt="">
                                        </a>
                                        <div class="shop-list-quickview">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                                <div class="shop-list-content">
                                    <h3><a href="#">Acer Aspire C24-865-UA91 AIO Desktop</a></h3>
                                    <div class="pro-list-price">
                                        <span>$50.00</span>
                                    </div>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <p>Donec accumsan auctor iaculis. Sed suscipit arcu ligula, at egestas magna molestie a. Proin ac ex maximus, ultrices justo eget, sodales orci. Aliquam libero ac turpis pharetra, in vehicula scelerisque. Vestibulum ut sem laoreet, feugiat tellus at, hendrerit arcu.</p>
                                    <div class="product-list-action">
                                        <a title="Add to Wishlist" href="#"><i class="fa fa-heart-o"></i></a>
                                        <div class="pro-list-actioncart">
                                            <a title="Add to cart" href="#">Add to cart</a>
                                        </div>
                                        <a title="Add to Compare" href="#"><i class="fa fa-clone" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shop-2" class="tab-pane active">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/01.jpg') }}" alt="">
                                    </a>
                                    <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <h4><a href="product-details.html">Art Deco Painting</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$100.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/02.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Chairs</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h4><a href="product-details.html">Blue Comfy Chair</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$20.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/03.jpg') }}" alt="">
                                    </a>
                                    <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Chairs</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h4><a href="product-details.html">Cozy Armchair</a></h4>
                                    <div class="product-price">
                                        <span class="old-price">$59.99</span>
                                        <span class="new-price">$35.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/04.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h4><a href="product-details.html">Framed Graphic</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$50.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/05.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <h4><a href="product-details.html">Graphic Painting</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$90.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/06.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <h4><a href="product-details.html">Home Floor Lamp</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/07.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <h4><a href="product-details.html">Leather Armchair</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$70.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/08.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h4><a href="product-details.html">Leather Sofa</a></h4>
                                    <div class="product-price">
                                        <span class="old-price">$70.99</span>
                                        <span class="new-price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="shop-3" class="tab-pane">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/01.jpg') }}" alt="">
                                    </a>
                                    <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NEW</span>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h4><a href="product-details.html">Art Deco Painting</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$100.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/02.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Chairs</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <h4><a href="product-details.html">Blue Comfy Chair</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$20.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/03.jpg') }}" alt="">
                                    </a>
                                    <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-25%</span>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Chairs</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h4><a href="product-details.html">Cozy Armchair</a></h4>
                                    <div class="product-price">
                                        <span class="old-price">$59.99</span>
                                        <span class="new-price">$35.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/04.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <h4><a href="product-details.html">Framed Graphic</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$50.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/05.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <h4><a href="product-details.html">Graphic Painting</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$90.99</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="product-details.html">
                                        <img src="{{ url('storage/images/product/06.jpg') }}" alt="">
                                    </a>
                                    <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Add to Cart</span>
                                                </a>
                                            </form>
                                        </div>
                                        <div class="add-to-wishlist pro_btn">
                                            <div class="show">
                                                <div class="default-wishbutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-wishlist-js" href="#">
                                                        <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="add-to-compare pro_btn">
                                            <div class="show">
                                                <div class="default-comparebutton-magni-dolores-eosquies-5 loading">
                                                    <a class="add-in-compare-js" href="#">
                                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">Decorative</a>
                                            <a href="#" class="furniture">Furniture</a>
                                        </span>
                                    </h3>
                                    <div class="product-rating">
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </div>
                                    <h4><a href="product-details.html">Home Floor Lamp</a></h4>
                                    <div class="product-price">
                                        <span class="new-price">$60.00</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pro-pagination-style mt-30 text-center">
                    <ul>
                        <li><a class="active" href="#">01</a></li>
                        <li><a href="#">02</a></li>
                        <li><a href="#">03</a></li>
                        <li><a href="#">04</a></li>
                        <li><a href="#">05</a></li>
                    </ul>
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
