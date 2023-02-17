<div class="container" id="navbar">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        @auth
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" href="/dashboard">
            <span class="fs-4">AspirasiRakyat</span>
        </a>
        @endauth
        @guest
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#modalLogin">
            <span class="fs-4">AspirasiRakyat</span>
        </a>
        @endguest
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ $active === 'home' ? 'active' : ''}}" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('aspirasi') }}" class="nav-link {{ $active === 'aspirasi' ? 'active' : ''}}">Aspirasi</a></li>
        </ul>
    </header>
</div>
