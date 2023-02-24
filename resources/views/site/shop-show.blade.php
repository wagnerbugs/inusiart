@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper">

    @include('site.commom.header')

    <div class="breadcrumb-area section-padding-2 pb-15 pt-15">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li>
                        <a href="{{ route('shop') }}">Loja </a>
                    </li>
                    <li><span> > </span></li>
                    <li class="active"> {{ $product->product }} </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shop-area section-padding-2 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-6">
                    <div class="product-details-tab product-details-tab2">
                        <div class="pro-dec-big-img-slider">
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ url('storage/images/product-details/b-large-1.jpg') }}">
                                        <img src="{{ url('storage/images/product-details/large-1.jpg') }}" alt="{{ $product->product }}">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="{{ url('storage/images/product-details/b-large-1.jpg') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ url('storage/images/product-details/b-large-2.jpg') }}">
                                        <img src="{{ url('storage/images/product-details/large-2.jpg') }}" alt="{{ $product->product }}">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="{{ url('storage/images/product-details/b-large-2.jpg') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ url('storage/images/product-details/b-large-3.jpg') }}">
                                        <img src="{{ url('storage/images/product-details/large-3.jpg') }}" alt="{{ $product->product }}">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="{{ url('storage/images/product-details/b-large-3.jpg') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ url('storage/images/product-details/b-large-4.jpg') }}">
                                        <img src="{{ url('storage/images/product-details/large-4.jpg') }}" alt="{{ $product->product }}">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="{{ url('storage/images/product-details/b-large-4.jpg') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                            <div class="easyzoom-style">
                                <div class="easyzoom easyzoom--overlay">
                                    <a href="{{ url('storage/images/product-details/b-large-5.jpg') }}">
                                        <img src="{{ url('storage/images/product-details/large-5.jpg') }}" alt="{{ $product->product }}">
                                    </a>
                                </div>
                                <a class="easyzoom-pop-up img-popup" href="{{ url('storage/images/product-details/b-large-5.jpg') }}"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </div>
                        </div>
                        <div class="product-dec-slider-2 product-dec-small-style2">
                            <div class="product-dec-small active">
                                <img src="{{ url('storage/images/product-details/small-1.jpg') }}" alt="{{ $product->product }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ url('storage/images/product-details/small-2.jpg') }}" alt="{{ $product->product }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ url('storage/images/product-details/small-3.jpg') }}" alt="{{ $product->product }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ url('storage/images/product-details/small-4.jpg') }}" alt="{{ $product->product }}">
                            </div>
                            <div class="product-dec-small">
                                <img src="{{ url('storage/images/product-details/small-5.jpg') }}" alt="{{ $product->product }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-6 border-right">
                    <div class="product-details-wrap pro-dec-res-mrg-top2">
                        <div class="product-details-content">
                            <span>{{ $product->category->category }}</span>
                            <h2 class="uppercase">{{ $product->product }}</h2>

                            <div class="pro-dec-info-wrap pro-dec-info-wrap2">
                                <div class="pro-dec-stock">
                                    <ul>
                                        <li>Coleção: <span>Inusiart</span></li>
                                        <li class="green"> <i class="fa fa-check-circle-o"></i> Em estoque</li>
                                    </ul>
                                </div>
                            </div>
                            @isset($product->value_discount)
                                DE: <h3>R$ <del>{{ $product->value }}</del> | POR: R$ {{ $product->value_discount }}</h3>
                            @else
                            <h3>R$ {{ $product->value }}</h3>
                            @endisset

                            <div class="product-details-peragraph">
                                <p>{!! $product->description !!}</p>
                            </div>
                            <form action="{{ route('shop.store') }}" method="post" class="variants clearfix">
                                @csrf
                                <div class="product-details-action-wrap">

                                        <input type="hidden" name="product_id" value="{{ $product->id }}">

                                        <div class="product-details-quality">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="quantity" value="1">
                                            </div>
                                        </div>
                                        <div class="product-details-cart">
                                            <a title="Add to cart" href="{{ route('shop.store') }}" onclick="event.preventDefault(); this.closest('form').submit();">Add to cart</a>
                                        </div>

                                </div>
                            </form>
                            <div class="product-details-meta">
                                <span class="categories">CATEGORIA: <a href="#">{{ $product->category->category }}</a></span>
                                <span>#REF: <a href="#">{{ $product->id }}</a></span>
                            </div>
                            <div class="product-details-info">
                                <a href="#"><i class=" ti-location-pin "></i>Pronta Entrega</a>
                                <a href="{{ route('contact') }}"><i class="ti-pin"></i>Fazer uma pergunta</a>
                            </div>
                            <div class="product-details-social-wrap">
                                <span>COMPARTILHAR </span>



                                <div class="product-details-social">
                                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                                    <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                                    <a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="description-review-area section-padding-2 pb-105">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a class="active" data-toggle="tab" href="#des-details2">DADOS ADICIONAIS</a>
                            <a data-toggle="tab" href="#des-details4">VENDEDOR</a>
                            <a data-toggle="tab" href="#des-details6">INFORMAÇÕES DE ENVIO</a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <div id="des-details2" class="tab-pane active">
                                <div class="additional-info">
                                    <h5>Pacote</h5>
                                    <ul>
                                        <li><span>Peso</span> {{ $product->weight }}Kg</li>
                                        <li><span>Largura</span> {{ $product->dimension_x }}cm</li>
                                        <li><span>Altura</span> {{ $product->dimension_y }}cm</li>
                                        <li><span>Profundidade</span> {{ $product->dimension_z }}cm</li>
                                    </ul>
                                </div>
                            </div>
                            <div id="des-details4" class="tab-pane ">
                                <div class="about-shiping-content">
                                    <p>Produto fabricado e vendido por Inusiart.</p>
                                </div>
                            </div>
                            <div id="des-details6" class="tab-pane">
                                <div class="about-shiping-content">
                                    <p>O produto pode ser enviado por transportadora ou Correios conforme opção escolhida ao finalizar o pedido.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="related-product-area section-padding-2 pb-115">
        <div class="container">
            <div class="section-title-12 mb-30">
                <h2>PRODUTOS RELACIONADOS</h2>
            </div>
            <div class="related-product-active owl-carousel">
                @foreach ($relateds as $related)
                <div class="product-wrap">
                    <div class="product-img pro-theme-color-border">
                        <a href="{{ route('shop.show', $related->slug) }}">
                            <img src="{{ url('storage/images/product/'.$related->image) }}" alt="{{ $related->product }}">
                        </a>

                        @if ($related->created_at)
                        <span class="badge-green badge-right-20 badge-top-20 badge-ptb-1">NOVO</span>
                        @endif

                        @isset($related->value_discount)
                        @php
                            $discount = round((($related->value - $related->value_discount) / $related->value_discount) * 100, 2);
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
                                <form action="/cart/add" method="post" class="variants clearfix">
                                    <input type="hidden" name="product_id" value="21324552241206">
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
                                <a href="#" class="decorative">{{ $related->category->category }}</a>
                            </span>
                        </h3>
                        <h4><a href="{{ route('shop.show', $related->slug) }}">{{ $related->product }}</a></h4>
                        <div class="product-price">

                            @isset($related->value_discount)
                            <span class="old-price">De: R$ <del>{{ $related->value }}</del></span>
                            <span class="new-price">Por: R$ {{ $related->value_discount }}</span>
                            @else
                            <span class="new-price">R$ {{ $related->value }}</span>
                            @endisset

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('site.commom.footer')

    {{-- Modal --}}
    @include('site.commom.modal')

</main>

@endsection
