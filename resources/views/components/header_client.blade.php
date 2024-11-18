<nav class="navbar navbar-expand-lg navbar-light header_client">
    <div class="container">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <div class="header_client_logo">
                <h1>NETSLOT</h1>
                <p>Cao Bồi Săn Hũ</p>
            </div>
        </a>
        <!-- Toggle Button for Mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bg-light  navbar-toggler-icon rounded-2"></span>
        </button>
        <!-- Navbar Links -->
        @if(!empty(session('user')))
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active text-light" aria-current="page" href="#">{{session('user.name')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Xu: {{session('user.coin')}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Nạp Xu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Hỗ trợ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="{{ route('client.logout') }}">Đăng xuất</a>
                </li>
            </ul>
        </div>
        @else
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Hỗ trợ</a>
                </li>
            </ul>
        </div>
        @endif
    </div>
</nav>