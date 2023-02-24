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
                </div>
            </div>

            <div class="tab-content jump-3 pt-30">
                <div id="shop-1" class="tab-pane">

                    @foreach ($products as $product)
                    <div class="shop-list-wrap mb-50">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                                <div class="product-wrap">
                                    <div class="product-img pro-theme-color-border product-border">
                                        <a href="{{ route('shop.show', $product->slug) }}">
                                            <img src="{{ url('storage/images/product/'.$product->image) }}" alt="{{ $product->product }}">
                                        </a>

                                        @if ($product->created_at)
                                        <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NOVO</span>
                                        @endif

                                        @isset($product->value_discount)
                                        @php
                                            $discount = round((($product->value - $product->value_discount) / $product->value_discount) * 100, 2);
                                        @endphp
                                        <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-{{ $discount }}%</span>
                                        @endisset

                                        {{-- <div class="shop-list-quickview">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6 col-sm-6 col-12">
                                <div class="shop-list-content">
                                    <h3><a href="{{ route('shop.show', $product->slug) }}">{{ $product->product }}</a></h3>
                                    <div class="pro-list-price">
                                        @isset($product->value_discount)
                                        <span class="old-price">De: R$ <del>{{ $product->value }}</del></span>
                                        <span class="new-price">Por: R$ {{ $product->value_discount }}</span>
                                        @else
                                        <span class="new-price">R$ {{ $product->value }}</span>
                                        @endisset
                                    </div>
                                    <p>{!! $product->description !!}</p>
                                    <div class="product-list-action">
                                        <div class="pro-list-actioncart">
                                            <a title="Adicionar ao carrinho" href="#">Adicionar ao carrinho</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div id="shop-2" class="tab-pane active">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="{{ route('shop.show', $product->slug) }}">
                                        <img src="{{ url('storage/images/product/'.$product->image) }}" alt="{{ $product->product }}">
                                    </a>

                                    @if ($product->created_at)
                                    <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NOVO</span>
                                    @endif

                                    @isset($product->value_discount)
                                    @php
                                        $discount = round((($product->value - $product->value_discount) / $product->value_discount) * 100, 2);
                                    @endphp
                                    <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-{{ $discount }}%</span>
                                    @endisset

                                    {{-- <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div> --}}
                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Adicionar ao carrinho</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">{{ $product->category->category }}</a>
                                        </span>
                                    </h3>
                                    <h4><a href="{{ route('shop.show', $product->slug) }}">{{ $product->product }}</a></h4>
                                    <div class="product-price">
                                        @isset($product->value_discount)
                                        <span class="old-price">R$ {{ $product->value }}</span>
                                        <span class="new-price">R$ {{ $product->value_discount }}</span>
                                        @else
                                        <span class="new-price">R$ {{ $product->value }}</span>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div id="shop-3" class="tab-pane">
                    <div class="row">
                        @foreach ($products as $product)
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                            <div class="product-wrap mb-55">
                                <div class="product-img pro-theme-color-border">
                                    <a href="{{ route('shop.show', $product->slug) }}">
                                        <img src="{{ url('storage/images/product/'.$product->image) }}" alt="{{ $product->product }}">
                                    </a>

                                    @if ($product->created_at)
                                    <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NOVO</span>
                                    @endif

                                    @isset($product->value_discount)
                                    @php
                                        $discount = round((($product->value - $product->value_discount) / $product->value_discount) * 100, 2);
                                    @endphp
                                    <span class="badge-theme-color badge-right-20 badge-top-20 badge-ptb-1">-{{ $discount }}%</span>
                                    @endisset

                                    {{-- <div class="quickview">
                                        <div class="quick-view-wrap pro_btn">
                                            <a data-toggle="modal" data-target="#exampleModal" href="#">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div> --}}

                                    <div class="product-action product-action-position-1 pro-action-theme-color">
                                        <div class="pro_btn add_tocart">
                                            <form action="/cart/add" method="post" class="variants clearfix cart-form-2309763235894">
                                                <input type="hidden" name="id" value="21324552241206">
                                                <a class="add-cart-btn">
                                                    <i class="fa fa-plus" aria-hidden="true"></i><span class="add_cart">Adicionar ao carrinho</span>
                                                </a>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h3>
                                        <span class="Categories">
                                            <a href="#" class="decorative">{{ $product->category->category }}</a>
                                        </span>
                                    </h3>
                                    <h4><a href="{{ route('shop.show', $product->slug) }}">{{ $product->product }}</a></h4>
                                    <div class="product-price">
                                        @isset($product->value_discount)
                                        <span class="old-price">R$ {{ $product->value }}</span>
                                        <span class="new-price">R$ {{ $product->value_discount }}</span>
                                        @else
                                        <span class="new-price">R$ {{ $product->value }}</span>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
