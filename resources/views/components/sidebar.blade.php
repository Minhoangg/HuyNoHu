<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="index.html" class="logo">
                <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
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
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Quản lý</h4>
                </li>
                <li class="nav-item">
                    <a href="{{route('system.user-getall')}}">
                        <i class="fas fa-user"></i>
                        <p>Tài Khoản</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('system.user-getall')}}">
                        <i class="fas fa-user"></i>
                        <p>Sảnh game</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('system.user-getall')}}">
                        <i class="fas fa-user"></i>
                        <p>game</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
