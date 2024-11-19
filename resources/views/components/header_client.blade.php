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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="bg-light  navbar-toggler-icon rounded-2"></span>
        </button>
        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @auth
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page"
                            href="#">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#">Xu: {{ Auth::user()->coin }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="{{ route('client.logout') }}">Đăng xuất</a>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-light" href="#" data-bs-toggle="modal"
                            data-bs-target="#supportModal">Hỗ trợ</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="supportModal" tabindex="-1" aria-labelledby="supportModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="supportModalLabel">Liên Hệ Telegram</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @Caoboisanhu
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
