@extends('admin.layouts.panel')
@section('head')
@php
$menu = 'pages';
$submenu = 'pages';
@endphp

<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ url('/storage/admin-lte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">

@endsection
@section('footer')
<script src="{{ url('/storage/admin-lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/toastr/toastr.min.js') }}"></script>
<script src="{{ url('/storage/admin-lte/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

<script>
    $(function () {
        $('#table').DataTable({
            "pageLength": 50,
            "order": [
                [0, "asc"]
            ],
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            "filterAlgorithm": "and",
            "language": {
                "search": "Buscar",
                "lengthMenu": "Exibir _MENU_ registros por página",
                "zeroRecords": "Sem registros",
                "info": "Página _PAGE_ de _PAGES_",
                "infoEmpty": "Sem registros",
                "paginate": {
                    "first": "<<",
                    "previous": "<",
                    "next": ">",
                    "last": ">>"
                },
                "infoFiltered": "(filtrado de _MAX_ registros totais)"
            },
            "buttons": ["copy", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');

        $("#table_wrapper").prepend('<a href="/admin/pages/create" class="btn btn-primary float-left"><i class="fa-solid fa-th"></i> Adicionar</a>');

        var bootstrapTooltip = $.fn.tooltip.noConflict();
        $.fn.bstooltip = bootstrapTooltip;
        $('[data-toggle="tooltip"]').bstooltip();


        $('#modal-delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var recipientId = button.data('id');

            $('#delete-form').attr('action', '/admin/pages/'+recipientId);

        });


    });

    @if (Session::get('fail'))
        $('.toastrDefaultError').ready(function() {
            toastr.error('{{ Session::get('fail') }}')
        });
    @endif

    @if (Session::get('success'))
        $('.toastrDefaultSuccess').ready(function() {
            toastr.success('{{ Session::get('success') }}')
        });
    @endif

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
                    <li class="breadcrumb-item active">Páginas adicionais</li>
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
                        <h5 class="m-0">Páginas cadastradas</h5>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">UID</th>
                                    <th>Página</th>
                                    <th>Target</th>
                                    <th>URL</th>
                                    <th>Ativo</th>
                                    <th style="width: 60px">Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pages as $page)
                                <tr>
                                    <td class="align-middle text-center">
                                        <div>
                                            {{ $page->id }}
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        {{ $page->page }}
                                    </td>
                                    <td class="align-middle">
                                        @if ($page->target == 1)
                                        <span class="text-success">
                                            Self
                                        </span>
                                        @else
                                        <span class="text-success">
                                            Blank
                                        </span>
                                        @endif
                                    </td>
                                    <td class="align-middle">
                                        {{ $page->slug }}
                                    </td>
                                    <td class="align-middle">
                                        @if ($page->active == 0)
                                        <span class="text-danger">
                                            Inativo
                                        </span>
                                        @else
                                        <span class="text-success">
                                            Ativo
                                        </span>
                                        @endif
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex flex-row">
                                            <div class="mr-2 tool" data-container=".tool" data-toggle="tooltip" data-placement="top" title="Editar">
                                                <a href="{{ route('admin.pages.edit', $page->id) }}" class="btn btn-sm btn-success">
                                                    <i class="fa-regular fa-pen-to-square"></i>
                                                </a>
                                            </div>
                                            <div class="mr-2 tool" data-container=".tool" data-toggle="tooltip" data-placement="top" title="Excluir">
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-id="{{ $page->id }}">
                                                    <i class="fa-solid fa-trash"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END MAIN CONTENT --}}

{{-- MODAL CONFIRMATION --}}
<form action="" method="POST" id="delete-form">
    @csrf
    @method('delete')

    <div class="modal fade" id="modal-delete" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <h4> Tem certeza que deseja excluir o registro?</h4>
                    <p><small>Esta ação não pode ser desfeita</small></p>

                    <button type="submit" class="btn btn-danger">Excluir</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
