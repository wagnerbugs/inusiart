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
                            @foreach ($posts as $read)
                            <div class="single-sidebar-post">
                                <div class="sidebar-post-img">
                                    <a href="blog-details.html">
                                        <img src="{{ url('storage/images/blog/'.$read->image) }}" alt="{{ $read->title }}"></a>
                                </div>
                                <div class="sidebar-post-content">
                                    <h4><a href="{{ route('blog.show', $read->slug) }}">{{ $read->title }}</a></h4>
                                    <span>{{ $read->created_at }} - por {{ $read->admin->name }} </span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="blog-details-wrap ml-20">
                        <div class="blog-details-content">
                            <div class="blog-details-img">
                                <img src="{{ url('storage/images/blog/'.$post->image) }}" alt="blog">
                                <span>{{ $post->subtitle }}</span>
                            </div>
                            <h3>{{ $post->title }}</h3>
                            <div class="blog-meta-5">
                                <ul>
                                    <li>Por <a href="#">{{ $post->admin->name }}</a></li>
                                    <li>-</li>
                                    <li><a href="#">{{ $post->created_at }}</a></li>
                                </ul>
                            </div>
                            {!! $post->body !!}
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
