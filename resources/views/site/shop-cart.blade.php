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
                    <p>Carrinho</p>
                    <h2>Seu carrinho de compras</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- cart start -->
    <div class="cart-main-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class=" cart-table-content">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>produto</th>
                                                <th>Valor</th>
                                                <th>Quantidade</th>
                                                <th>total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($carts)

                                            @foreach ($carts as $cart => $item)
                                            <tr>
                                                <td class="product-remove align-middle text-center">
                                                    <a href="#" class="btn btn-link"><i class=" ti-close "></i></a>
                                                </td>
                                                <td class="product-img">
                                                    <img src="{{ url('storage/images/cart/cart-1.jpg') }}" alt="">
                                                </td>
                                                <td class="product-name"><a href="#">{{ $item['product_id'] }} </a></td>
                                                <td class="product-price"><span class="amount">R$ {{ $item['price'] }}</span></td>
                                                <td class="cart-quality">{{ $item['quantity'] }}</td>
                                                <td class="product-total"><span>R$ {{ $item['price'] }}</span></td>
                                            </tr>
                                            @endforeach

                                            @else
                                            <tr>
                                                <td colspan="5" class="text-center">
                                                    Ainda não recebemos as suas escolhas.
                                                </td>
                                            </tr>
                                            @endisset
                                        </tbody>
                                    </table>
                                </div>
                                <div class="cart-shiping-update-wrapper">
                                    <div class="discount-code">
                                        <input type="text" required="" name="name" placeholder="Digite o código do cupom">
                                        <button class="coupon-btn" type="submit">Aplicar cupom</button>
                                    </div>
                                    <div class="cart-clear">
                                        <a href="#" class="update-cart">Limpar carrinho</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="grand-total-wrap">
                                    @isset($carts)
                                    <h4>Resumo do carrinho</h4>
                                    <div class="grand-total-content">
                                        <ul>
                                            <li>Subtotal <span> R$ {{ $getTotalBR }}</span></li>
                                            <li>Frete
                                                <ul>
                                                    <li><input type="radio" name="shipping" value="info" checked="checked">Correios</li>
                                                    <li><input type="radio" name="shipping" value="info2">Transportadora</li>
                                                    <li><input type="radio" name="shipping" value="info3">Retirar no local</li>
                                                </ul>
                                            </li>
                                            <li>Valor total <span>R$ {{ $getTotalBR }}</span> </li>
                                        </ul>
                                    </div>
                                    <div class="grand-btn">
                                        <a href="#">Finalizar pedido</a>
                                    </div>
                                    @endisset
                                </div>
                            </div>
                        </div>
                    </form>
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
