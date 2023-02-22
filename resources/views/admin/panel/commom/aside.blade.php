<aside class="main-sidebar sidebar-dark-primary elevation-4">

    {{-- BRAND LOGO --}}

    <a href="{{ route('admin.dashboard') }}" class="brand-link">
        <img src="{{ url('/android-chrome-192x192.png') }}" alt="Logo " class="brand-image " style="opacity: .8">
        <span class="brand-text font-weight-light"> Inusiart</span>
    </a>

    {{-- SIDEBAR --}}
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('storage/images/admins/'.Auth::guard('admin')->user()->image) }}" class="img-circle elevation-2" alt="Foto de {{ Auth::guard('admin')->user()->name }}">
            </div>
            <div class="info">
                <a href="" class="d-block">{{ Auth::guard('admin')->user()->name }}</a>
            </div>
        </div>

        {{-- FORM LINK MENU --}}
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- SIDEBAR --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">GERENCIAMENTO</li>

                {{-- NOTE: nav-icon + Fontawasome --}}

                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link {{ $menu == 'dashboard' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @if (Auth::guard('admin')->user()->level_id == 1)
                <li class="nav-item">
                    <a href="" class="nav-link {{ $menu == 'contacts' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Contatos
                        </p>
                    </a>
                </li>
                @endif

            </ul>
        </nav>
    </div>
</aside>
