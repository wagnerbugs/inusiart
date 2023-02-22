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
                    <p>Login de usuários cadastrados</p>
                    <h2>Login</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="login-register-area pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8 ml-auto mr-auto">
                    <div class="login-register-wrap">
                        <h3><i class="fa fa-user-o"></i> Já sou cadastrado</h3>
                        <div class="login-register-form">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="sin-login-register">
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="seu e-mail cadastrado" required autofocus autocomplete="username">
                                </div>
                                <div class="sin-login-register">
                                    <input type="password" name="password" placeholder="Senha" required autocomplete="current-password">
                                </div>
                                <div class="login-register-btn">
                                    <button class="login" type="submit">Login</button>
                                </div>
                                <div class="remember-lost-wrap">
                                    <div class="remember-wrap">
                                        <input type="checkbox" name="remember">
                                        <label>Remember me</label>
                                    </div>
                                    <div class="lost-wrap">
                                        <a href="{{ route('password.request') }}">Esqueceu a senha?</a>
                                    </div>
                                    <div class="lost-wrap">
                                        <a href="{{ route('register') }}">Cadastrar-se</a>
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
