@extends('admin.layouts.panel')
@section('head')
@php
$menu = 'dashboard';
$submenu = 'dashboard';
@endphp
@endsection
@section('footer')
@endsection
@section('content')

{{-- BREADCRUMB --}}

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item">Dashboard</li>
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
            <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Lista de pedidos</h5>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <tr>
                                <td>#</td>
                                <td>Cliente</td>
                                <td>Valor</td>
                                <td>Status</td>
                                <td>Ações</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Novidades</h5>
                    </div>
                    <div class="card-body">

                    </div>
                </div>

                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h5 class="m-0">Contatos</h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="contacts">
                            @foreach ($contacts as $contact)
                            <div class="card">
                                <div class="card-header" id="head_{{ $contact->id }}">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link btn-block text-left {{ $loop->index == 0 ? '' : 'collapsed' }}" type="button" data-toggle="collapse" data-target="#collapse_{{ $contact->id }}" aria-expanded="true" aria-controls="collapseOne">
                                            <strong>{{ $contact->name }}</strong> <small>({{ $contact->email }}) {{ $contact->phone }} | <i class="fa-regular fa-clock"></i> {!! Generic::formatDateForHumans($contact->created_at) !!}</small>
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse_{{ $contact->id }}" class="collapse {{ $loop->index == 0 ? 'show' : '' }}" aria-labelledby="head_{{ $contact->id }}" data-parent="#contacts">
                                    <div class="card-body">
                                        <p>{{ $contact->message }}</p>
                                        <form action="{{ route('admin.contacts.active', $contact->id) }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="active" value="0">
                                            <button type="submit" class="btn btn-xs btn-danger">Resolvido</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 ">
                <ul class="list-group mb-3">
                    <li class="list-group-item list-group-item-secondary text-uppercase" aria-current="true"><span>Gestores online</span> <span class="badge  badge-secondary float-right">{{ $counters->allAdminsOnline }}/{{ $counters->allAdmins }}</span></li>
                    @foreach($adminsOnline as $adminOnline)
                    <li class="list-group-item"><small class="d-flex justify-content-between"><span>{{ $adminOnline->name }}</span> <span class="">{{ $adminOnline->level->level }}</span></small></li>
                    @endforeach
                </ul>

                <div class="info-box">
                    <span class="info-box-icon bg-info"><i class="far fa-newspaper"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Postagens</span>
                        <span class="info-box-number">{{ $counters->allPosts }}</span>
                    </div>
                </div>
                <div class="info-box">
                    <span class="info-box-icon bg-warning"><i class="fas fa-user-group"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Assinantes</span>
                        <span class="info-box-number">{{ $counters->allUsers }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- END MAIN CONTENT --}}
@endsection
