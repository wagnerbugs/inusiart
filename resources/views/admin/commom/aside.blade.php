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

                <li class="nav-item {{ $menu == 'products' ? 'menu-open' : '' }}">{{-- NOTE: menu-open --}}
                    <a href="#" class="nav-link {{ $menu == 'products' ? 'active' : '' }}">{{-- NOTE: active --}}
                        <i class="nav-icon fas fa-newspaper text-primary"></i>
                        <p>
                            Produtos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.products.create') }}" class="nav-link {{ $submenu == 'products-create' ? 'active' : '' }}">{{-- NOTE: active --}}
                                <i class="fas fa-file-circle-plus nav-icon text-primary"></i>
                                <p>Cadastrar produto</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.products.index') }}"" class=" nav-link {{ $submenu=='products' ? 'active' : '' }}">
                                <i class="fas fa-folder-tree nav-icon text-primary"></i>
                                <p>Listar produtos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.categories.index') }}" class="nav-link {{ $submenu == 'categories' ? 'active' : '' }}">
                                <i class="fas fa-diagram-project nav-icon text-primary"></i>
                                <p>Categorias</p>
                            </a>
                        </li>
                    </ul>
                </li>

                @if (Auth::guard('admin')->user()->level_id == 1)
                <li class="nav-item">
                    <a href="{{ route('admin.contacts.index') }}" class="nav-link {{ $menu == 'contacts' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Contatos
                        </p>
                    </a>
                </li>
                @endif

                @if (Auth::guard('admin')->user()->level_id == 1)
                <li class="nav-item">
                    <a href="{{ route('admin.pages.index') }}" class="nav-link {{ $menu == 'pages' ? 'active' : '' }}">
                        <i class="nav-icon fas fa-file-contract"></i>
                        <p>
                            Páginas
                        </p>
                    </a>
                </li>
                @endif

            </ul>
        </nav>
    </div>
</aside>
