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
                    <p>Registro de cliente</p>
                    <h2>Registro</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                    <div class="login-register-wrap">
                        <h3><i class="fa fa-user-o"></i> Cadastre-se</h3>
                        <div class="login-register-form">
                            <form action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="sin-login-register">
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Seu nome" required autofocus autocomplete="name">
                                </div>
                                <div class="sin-login-register">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Seu e-mail" required autofocus autocomplete="username">
                                </div>
                                <div class="sin-login-register">
                                    <input type="password" name="password" placeholder="Senha" required autocomplete="new-password">
                                </div>
                                <div class="sin-login-register">
                                    <input type="password" name="password_confirmation" placeholder="Senha" required autocomplete="new-password">
                                </div>
                                <div class="login-register-btn">
                                    <button class="login" type="submit">Enviar</button>
                                </div>
                                <div class="remember-lost-wrap">
                                    <div class="lost-wrap">
                                        <a href="{{ route('login') }}">Já sou cadastrado</a>
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
