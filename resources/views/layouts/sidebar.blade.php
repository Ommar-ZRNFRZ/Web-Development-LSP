<!-- sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
                <img src="{{ URL::asset('assets/img/examples/smk(1).png') }}" alt="smk(1)" class="navbar-brand mt-4"
                    width="195" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                @if (auth()->user()->level === 'admin')
                    <li class="nav-item {{ request()->is('dashboard*') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="fas fa-home"></i>
                            <p>Beranda</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('siswa.index') }}">
                            <i class="fas fa-wallet"></i>
                            <p>Siswa</p>
                        </a>
                    </li>
                    <li class="nav-item {{ request()->is() ? 'active' : '' }}">
                        <a href="/assesor">
                            <i class="fas fa-user"></i>
                            <p>Assessor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <p>Skema</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="">
                            <i class="fas fa-ship"></i> 
                            <p>Jadwal</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}">
                            <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            <p>Logout</p>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
