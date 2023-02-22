@extends('admin.layouts.panel')
@section('head')

@php
$menu = 'configs';
$submenu = 'pages';
@endphp


<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/summernote/summernote-bs4.min.css') }}">
<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

@endsection
@section('footer')

<script src="{{ url('/storage/admin-lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/summernote/lang/summernote-pt-BR.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/summernote/summernote-cleaner.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/select2/js/select2.full.min.js') }}"></script>

<script>
    $(function() {
        $('.summernote').summernote({
            height: 'auto',
            minHeight: 400,
            focus: false,
            tabsize: 2,
            lang: 'pt-BR',
            toolbar: [
                ['cleaner',['cleaner']],
                ['style',['style']],
                ['font',['bold','italic','underline','clear']],
                ['para',['ul','ol','paragraph']],
                ['height',['height']],
                ['table',['table']],
                ['insert',['link', 'hr', 'video']],
                ['view',['fullscreen','codeview', 'quebra']],

            ],
            cleaner: {
                action: 'both',
                icon: '<i class="note-icon">Limpar</i>',
                keepHtml: false,
                keepTagContents: ['span'],
                badTags: ['applet', 'col', 'colgroup', 'embed', 'noframes', 'noscript', 'script', 'style', 'title'],
                badAttributes: ['bgcolor', 'border', 'height', 'cellpadding', 'cellspacing', 'lang', 'start', 'style', 'valign', 'width'],
                limitChars: false,
                limitDisplay: 'both',
                limitStop: false,
                notTimeOut: 850,
            },
            callbacks: {
                onImageUpload: function(files, editor, welEditable) {
                    sendFile(files[0], editor, welEditable);
                }
            }
        });

    });

    $('.summernote').on('paste', function(e) {
        e.preventDefault();
        var text = '';

        if (e.clipboardData || e.originalEvent.clipboardData) {
            text = (e.originalEvent || e).clipboardData.getData('text/plain');
        } else if (window.clipboardData) {
            text = window.clipboardData.getData('Text');
        }

        if (document.queryCommandSupported('insertText')) {
            document.execCommand('insertText', false, text);
        } else {
            document.execCommand('paste', false, text);
        }
    });

    $('.note-editable').css('font-size','18px!important;');

    $(document).on("DOMNodeInserted", '.note-editable', function (e) {
        if (e.target.tagName === "SPAN") {
            $(e.target).replaceWith($(e.target).contents());
        }
    });

</script>
@endsection
@section('content')

{{-- BREADCRUMB --}}

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Páginas adicionais</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('admin.pages.index') }}">Páginas adicionais</a></li>
                    <li class="breadcrumb-item active">Editar</li>
                </ol>
            </div>
        </div>
    </div>
</div>

{{-- END BREADCRUMB --}}

{{-- MAIN CONTENT --}}

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Editar página adicional</h5>
                    </div>
                    <form action="{{ route('admin.pages.update', $page->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            @include('admin.components.validations')
                            @include('admin.pages._partials.form')
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Atualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END MAIN CONTENT --}}
@endsection
