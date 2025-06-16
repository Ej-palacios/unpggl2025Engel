<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">MyApp</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('posts*') ? 'active' : '' }}" href="{{ url('/posts') }}">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
.navbar {
    transition: all 0.3s ease;
}

.navbar-brand {
    font-size: 1.5rem;
    letter-spacing: 1px;
}

.nav-link {
    padding: 0.5rem 1rem;
    font-weight: 500;
    color: rgba(255,255,255,0.9) !important;
    transition: all 0.2s ease;
}

.nav-link:hover {
    color: #fff !important;
    transform: translateY(-2px);
}

.nav-link.active {
    color: #fff !important;
    border-bottom: 2px solid #fff;
}

@media (max-width: 991px) {
    .navbar-nav {
        padding: 1rem 0;
    }
    .nav-link {
        padding: 0.5rem 1.5rem;
    }
}
</style>