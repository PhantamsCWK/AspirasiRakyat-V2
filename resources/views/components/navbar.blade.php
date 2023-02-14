<div class="container" id="navbar">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#modalLogin">
            <span class="fs-4">AspirasiRakyat</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ $active === 'home' ? 'active' : ''}}" aria-current="page">Home</a></li>
            <li class="nav-item"><a href="{{ route('aspirasi') }}" class="nav-link {{ $active === 'aspirasi' ? 'active' : ''}}">Aspirasi</a></li>
            @if ($active === 'aspirasi')
                <li class="nav-item"><a href="{{ url()->current() }}" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalForm">Form</a></li>
            @endif
        </ul>
    </header>
</div>
