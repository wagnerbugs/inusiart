@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper">

    @include('site.commom.header')

    <div class="breadcrumb-area section-padding-1 breadcrumb-ptb-1">
        <div class="container-fluid">
            <div class="breadcrumb-content text-center">
                <div class="breadcrumb-title">
                    <p>Painel do cliente</p>
                    <h2>Minha conta</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper start -->
    <div class="my-account-wrapper pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-toggle="tab"><i class="fa fa-dashboard"></i> Dashboard</a>
                                    <a href="#orders" data-toggle="tab"><i class="fa fa-cart-arrow-down"></i> Pedidos</a>
                                    <a href="#payment-method" data-toggle="tab"><i class="fa fa-credit-card"></i> Método de pagamento</a>
                                    <a href="#address-edit" data-toggle="tab"><i class="fa fa-map-marker"></i> Endereço</a>
                                    <a href="#account-info" data-toggle="tab"><i class="fa fa-user"></i> Dados pessoais</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();"><i class="fa fa-sign-out"></i> Logout</a>
                                    </form>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->
                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dashboard</h3>
                                            <div class="welcome">
                                                <p>Olá, <strong>{{ Auth::user()->name }}</strong></p>
                                            </div>

                                            <p class="mb-0">No painel da sua conta. você pode verificar e visualizar facilmente seus pedidos recentes, gerenciar seus endereços de remessa e cobrança e editar sua senha e detalhes da conta.</p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Pedidos</h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                Nenhum registro encontrado
                                                {{-- <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Order</th>
                                                            <th>Date</th>
                                                            <th>Status</th>
                                                            <th>Total</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>Aug 22, 2018</td>
                                                            <td>Pending</td>
                                                            <td>$3000</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>July 22, 2018</td>
                                                            <td>Approved</td>
                                                            <td>$200</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>June 12, 2017</td>
                                                            <td>On Hold</td>
                                                            <td>$990</td>
                                                            <td><a href="cart.html" class="check-btn sqr-btn ">View</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table> --}}
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Método de pagamento</h3>
                                            <p class="saved-message">Você ainda não pode salvar sua forma de pagamento.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Endereço de entrega</h3>
                                            <address>
                                                Nenhum endereço cadastrado
                                                {{-- <p><strong>Alex Tuntuni</strong></p>
                                                <p>1355 Market St, Suite 900 <br>
                                                    San Francisco, CA 94103</p>
                                                <p>Mobile: (123) 456-7890</p> --}}
                                            </address>
                                            <a href="#" class="check-btn sqr-btn "><i class="fa fa-edit"></i> Editar Endereço</a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3>Dados pessoais</h3>
                                            <div class="account-details-form">
                                                <form action="{{ route('profile.update') }}" method="post" >
                                                    @csrf
                                                    @method('patch')
                                                    <div class="single-input-item">
                                                        <label for="name" class="required">Nome</label>
                                                        <input type="text" name="name" value="{{ Auth::user()->name }}"/>
                                                    </div>
                                                    <div class="single-input-item">
                                                        <label for="email" class="required">E-mail</label>
                                                        <input type="email" name="email" value="{{ Auth::user()->email }}" />
                                                    </div>
                                                    <div class="single-input-item">
                                                        <button class="check-btn sqr-btn ">Salvar</button>
                                                    </div>
                                                </form>
                                                <br><br>
                                                <form method="post" action="{{ route('password.update') }}">
                                                    @csrf
                                                    @method('put')
                                                    <fieldset>
                                                        <legend>Mudar a senha</legend>
                                                        <div class="single-input-item">
                                                            <label for="current_password" class="required">Senha atual</label>
                                                            <input type="password" name="current_password" autocomplete="current-password" />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="password" class="required">Nova senha</label>
                                                                    <input type="password" name="password" autocomplete="new-password" />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="single-input-item">
                                                                    <label for="password_confirmation" class="required">Confirmar nova senha</label>
                                                                    <input type="password" name="password_confirmation" autocomplete="new-password" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item">
                                                        <button class="check-btn sqr-btn ">Mudar senha</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
