<nav class="main-header navbar navbar-expand navbar-dark navbar-light" id="navbar-header">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('admin.dashboard') }}" class="nav-link">Dashboard</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">Suporte</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <input type="hidden" name="email" value="{{ Auth::guard('admin')->user()->email }}">
                <a href="route('logout')" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">
                    Sair
                </a>
            </form>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
        <li class="nav-item">
            <form method="POST" action="">
                @csrf
                @method('PATCH')
                <input type="hidden" name="id" value="{{ Auth::guard('admin')->user()->id }}">
                <input type="hidden" name="style" value="{{ Auth::guard('admin')->user()->style == 'light-mode' ? 'dark-mode' : 'light-mode' }}">
                <a href="route('style')" class="nav-link mode" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i id="button-dark-mode" class="fas fa-{{ Auth::guard('admin')->user()->style == 'light-mode' ? 'moon' : 'sun' }}"></i>
                </a>
            </form>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
