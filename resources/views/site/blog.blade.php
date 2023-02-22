@extends('layouts.site')

@section('head')

@endsection

@section('footer')

@endsection

@section('content')

<main class="main-wrapper">

    @include('site.commom.header')

    <div class="breadcrumb-area section-padding-1 breadcrumb-ptb-1 mt-5">
        <div class="container">
            <div class="breadcrumb-content text-left">
                <div class="breadcrumb-title">
                    <h2>Blog</h2>
                    <p>Fique por dentro das novidades e artigos que preparamos para você.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- blog area start -->
    <div class="blog-area pb-120">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-3">
                    <div class="sidebar-search">
                        <form class="search-form" action="#">
                            <input type="text" placeholder="Buscar postagem">
                            <button class="button-search"><i class="lnr lnr-magnifier"></i></button>
                        </form>
                    </div>
                    <div class="sidebar-widget mt-60 mb-55">
                        <h4 class="pro-sidebar-title2">Mais acessados</h4>
                        <div class="sidebar-post-wrap mt-30">
                            <div class="single-sidebar-post">
                                <div class="sidebar-post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ url('storage/images/blog/3.jpeg') }}" alt=""></a>
                                </div>
                                <div class="sidebar-post-content">
                                    <h4><a href="blog-details.html">Design de Interiores</a></h4>
                                    <span>Novembro, 2023 - por Inusiart </span>
                                </div>
                            </div>
                            <div class="single-sidebar-post">
                                <div class="sidebar-post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ url('storage/images/blog/2.jpeg') }}" alt=""></a>
                                </div>
                                <div class="sidebar-post-content">
                                    <h4><a href="blog-details.html">Design de Interiores</a></h4>
                                    <span>Dezembro, 2023 - por Inusiart </span>
                                </div>
                            </div>
                            <div class="single-sidebar-post">
                                <div class="sidebar-post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ url('storage/images/blog/1.jpeg') }}" alt=""></a>
                                </div>
                                <div class="sidebar-post-content">
                                    <h4><a href="blog-details.html">Design de Interiores</a></h4>
                                    <span>Janeiro, 2023 - por Inusiart </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="main-blog-layout-wrap">

                        @foreach ($posts as $post)

                        <div class="blog-wrap-layout">
                            <div class="blog-image-layout col-lg-8">
                                <a href="{{ route('blog.show', $post->slug) }}">
                                    <img src="{{ url('storage/images/blog/'.$post->image) }}" alt="">
                                </a>
                            </div>
                            <div class="blog-content-layout col-lg-4">
                                <div class="blog-layout-cover">
                                    <div class="blog-meta-layout">
                                        <h2><span class="headline">{{ $post->subtitle }}</span></h2>
                                        <h1>{{ $post->title }}</h1>
                                        <ul>
                                            <li><a href="#">{{ $post->created_at }}</a></li>
                                            <li>/</li>
                                            <li><a href="#">por {{ $post->admin->name }}</a></li>
                                        </ul>
                                    </div>
                                    <div class="product-details-social">
                                        <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                                        <a class="instagram" href="#"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        <div class="onright">
                            <p class="pageNext">
                                <a href="#">Postagem anterior<i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                            </p>
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
