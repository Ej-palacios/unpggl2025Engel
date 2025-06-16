@extends('layouts.app')

@section('titulo', 'Bienvenido al Blog')

@section('content')
<div class="min-vh-100 bg-dark">
    <!-- Hero Section -->
    <div class="hero-gradient py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold text-white mb-4">Explora el <span class="text-primary">Futuro</span> de los Blogs</h1>
                    <p class="lead text-white-50 mb-4">Una plataforma donde las ideas cobran vida con diseño moderno y tecnología avanzada</p>
                    <div class="d-flex gap-3">
                        <a href="{{ url('/posts/create') }}" class="btn btn-primary btn-lg px-4 rounded-pill shadow">
                            <i class="bi bi-plus-circle me-2"></i> Crear Post
                        </a>
                        <a href="{{ url('/posts') }}" class="btn btn-outline-light btn-lg px-4 rounded-pill">
                            Explorar Contenido
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="glass-card p-4 rounded-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-sm bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3">
                                <i class="bi bi-lightning-charge-fill"></i>
                            </div>
                            <h5 class="mb-0 text-white">Tendencias</h5>
                        </div>
                        <p class="text-white-50 small">Descubre los posts más populares de la semana en nuestra comunidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent py-3 sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-stars me-2 text-primary"></i>ModernBlog
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarContent">
                @include('components.menu')
                <div class="ms-auto d-flex">
                    <a href="#" class="btn btn-sm btn-outline-light rounded-pill px-3 me-2">
                        <i class="bi bi-person"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-3">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container py-5">
        <div class="row g-4">
            <!-- Featured Post -->
            <div class="col-lg-8">
                <div class="card border-0 overflow-hidden featured-post-card">
                    <img src="https://source.unsplash.com/random/800x400/?technology" class="card-img-top" alt="Featured Post">
                    <div class="card-body glass-card-content">
                        <div class="badge bg-primary bg-opacity-25 text-white mb-3">Destacado</div>
                        <h2 class="card-title text-white">El Futuro de la Tecnología Web</h2>
                        <p class="card-text text-white-50">Exploramos las tendencias que definirán el desarrollo web en los próximos años.</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="avatar-xs bg-white rounded-circle me-2"></div>
                            <small class="text-white-50 me-3">Autor</small>
                            <small class="text-white-50"><i class="bi bi-calendar me-1"></i> {{ now()->format('d M, Y') }}</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="glass-card p-4 rounded-4 h-100">
                    <h5 class="text-white mb-4"><i class="bi bi-fire text-primary me-2"></i> Trending Now</h5>
                    <div class="d-flex mb-3 pb-3 border-bottom border-dark">
                        <div class="flex-shrink-0">
                            <span class="avatar-sm bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-1-circle-fill"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 text-white">Diseño UI/UX 2023</h6>
                            <small class="text-white-50">1500 vistas</small>
                        </div>
                    </div>
                    <div class="d-flex mb-3 pb-3 border-bottom border-dark">
                        <div class="flex-shrink-0">
                            <span class="avatar-sm bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-2-circle-fill"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 text-white">Laravel 10 Features</h6>
                            <small class="text-white-50">1200 vistas</small>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="flex-shrink-0">
                            <span class="avatar-sm bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-3-circle-fill"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0 text-white">JavaScript ES2023</h6>
                            <small class="text-white-50">980 vistas</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Post List -->
            <div class="col-12">
                <h4 class="text-white mb-4"><i class="bi bi-newspaper text-primary me-2"></i> Últimas Publicaciones</h4>
                <div class="row g-4">
                    @for($i = 1; $i <= 6; $i++)
                    <div class="col-md-6 col-lg-4">
                        <div class="card border-0 rounded-4 post-card h-100">
                            <div class="card-img-top-container">
                                <img src="https://source.unsplash.com/random/400x300/?tech,{{ $i }}" class="card-img-top rounded-top-4" alt="Post image">
                                <div class="badge bg-dark bg-opacity-75 text-white position-absolute top-0 end-0 m-3">Nuevo</div>
                            </div>
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <span class="badge bg-primary bg-opacity-25 text-primary me-2">Categoría {{ $i }}</span>
                                    <small class="text-white-50"><i class="bi bi-clock me-1"></i> {{ $i }}h</small>
                                </div>
                                <h5 class="card-title text-white">Título del Post #{{ $i }}</h5>
                                <p class="card-text text-white-50">Breve descripción del contenido del post que aparece aquí como resumen...</p>
                            </div>
                            <div class="card-footer bg-transparent border-0 pt-0">
                                <a href="#" class="btn btn-sm btn-outline-light rounded-pill px-3 stretched-link">Leer más</a>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
                
                <div class="text-center mt-5">
                    <a href="{{ url('/posts') }}" class="btn btn-primary px-5 rounded-pill shadow">
                        Ver Todos los Posts <i class="bi bi-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --primary-color: #6366f1;
    --primary-hover: #4f46e5;
    --glass-opacity: 0.15;
}

body {
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    background-color: #0f172a;
    color: #f8fafc;
    overflow-x: hidden;
}

.hero-gradient {
    background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
    position: relative;
    overflow: hidden;
}

.hero-gradient::after {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 200%;
    background: radial-gradient(circle, rgba(99, 102, 241, 0.1) 0%, transparent 70%);
    z-index: 0;
}

.glass-card {
    background: rgba(15, 23, 42, 0.5);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.glass-card:hover {
    background: rgba(15, 23, 42, 0.7);
    transform: translateY(-5px);
}

.featured-post-card {
    position: relative;
    height: 100%;
    min-height: 400px;
}

.featured-post-card .card-img-top {
    height: 100%;
    object-fit: cover;
    filter: brightness(0.7);
}

.glass-card-content {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
    padding: 2rem;
}

.post-card {
    background: rgba(15, 23, 42, 0.5);
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.3s ease;
}

.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
}

.post-card .card-img-top {
    height: 180px;
    object-fit: cover;
}

.avatar-xs {
    width: 24px;
    height: 24px;
}

.avatar-sm {
    width: 36px;
    height: 36px;
}

.navbar {
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    background: rgba(15, 23, 42, 0.7) !important;
}

.btn-primary {
    background-color: var(--primary-color);
    border-color: var(--primary-color);
}

.btn-primary:hover {
    background-color: var(--primary-hover);
    border-color: var(--primary-hover);
}

.btn-outline-light:hover {
    color: #0f172a;
}

.badge {
    font-weight: 500;
    padding: 0.35em 0.65em;
}

/* Animations */
@keyframes float {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.floating {
    animation: float 6s ease-in-out infinite;
}
</style>

<!-- Include Alpine.js for interactivity -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
@endsection

@section('autores')
<footer class="bg-gray-900 text-white-50 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <h5 class="text-white mb-4"><i class="bi bi-stars text-primary me-2"></i>ModernBlog</h5>
                <p>Una plataforma moderna para compartir conocimiento y conectar con la comunidad de desarrolladores.</p>
                <div class="d-flex gap-3 mt-4">
                    <a href="#" class="text-white-50 hover-text-primary"><i class="bi bi-twitter"></i></a>
                    <a href="#" class="text-white-50 hover-text-primary"><i class="bi bi-github"></i></a>
                    <a href="#" class="text-white-50 hover-text-primary"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="text-white-50 hover-text-primary"><i class="bi bi-discord"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-4">
                <h6 class="text-white mb-4">Explorar</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Inicio</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Posts</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Categorías</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Autores</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-4">
                <h6 class="text-white mb-4">Comunidad</h6>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Eventos</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Foros</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Meetups</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 hover-text-primary text-decoration-none">Sponsors</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4">
                <h6 class="text-white mb-4">Suscríbete</h6>
                <p>Recibe las últimas publicaciones directamente en tu correo.</p>
                <div class="input-group mb-3">
                    <input type="email" class="form-control bg-gray-800 border-dark text-white" placeholder="Tu email">
                    <button class="btn btn-primary" type="button"><i class="bi bi-envelope"></i></button>
                </div>
            </div>
        </div>
        <hr class="my-4 border-gray-700">
        <div class="row">
            <div class="col-md-6">
                <p class="mb-0 small">&copy; {{ now()->year }} ModernBlog. Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <p class="mb-0 small">Desarrollado con <i class="bi bi-heart-fill text-danger"></i> por <span class="text-primary">Engel Josue Pineda</span></p>
            </div>
        </div>
    </div>
</footer>
@endsection