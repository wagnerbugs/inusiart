@extends('admin.layouts.panel')
@section('head')
@php
$menu = 'contacts';
$submenu = 'contacts';
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
                "lengthMenu": "Exibir _MENU_ registros por p??gina",
                "zeroRecords": "Sem registros",
                "info": "P??gina _PAGE_ de _PAGES_",
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

        $("#table_wrapper").prepend('<a href="/admin/contacts/inactive" class="btn btn-primary float-left"><i class="fa-solid fa-envelope"></i> Ver resolvidos</a>');

        var bootstrapTooltip = $.fn.tooltip.noConflict();
        $.fn.bstooltip = bootstrapTooltip;
        $('[data-toggle="tooltip"]').bstooltip();


        $('#modal-delete').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget);
            var recipientId = button.data('id');

            $('#delete-form').attr('action', '/admin/contacts/'+recipientId);

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
                <h1 class="m-0">Contatos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Contatos</li>
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
                        <h5 class="m-0">Contatos ativos</h5>
                    </div>
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 30px;">UID</th>
                                    <th>Remetente</th>
                                    <th>Mensagem</th>
                                    <th style="width: 60px">A????es</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td class="align-middle text-center">
                                        <div>
                                            {{ $contact->id }}
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <strong>{{ $contact->name }}</strong><br>
                                        {{ $contact->email }} {{ $contact->phone }}
                                    </td>
                                    <td class="align-middle">
                                        <small><strong>{{ $contact->created_at }}</strong></small><br>
                                        {{ $contact->message }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="d-flex flex-row">
                                            <div class="mr-2 tool" data-container=".tool" data-toggle="tooltip" data-placement="top" title="Resolvido">
                                                <form action="{{ route('admin.contacts.active', $contact->id) }}" method="post">
                                                    @csrf
                                                    @method('patch')
                                                    <input type="hidden" name="active" id="active" value="0">
                                                    <button class="btn btn-warning btn-sm"><i class="fas fa-arrow-down"></i></button>
                                                </form>
                                            </div>
                                            <div class="mr-2 tool" data-container=".tool" data-toggle="tooltip" data-placement="top" title="Excluir">
                                                <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete" data-id="{{ $contact->id }}">
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
                    <p><small>Esta a????o n??o pode ser desfeita</small></p>

                    <button type="submit" class="btn btn-danger">Excluir</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
