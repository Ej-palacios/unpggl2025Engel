@extends('layouts.app')

@section('titulo', 'Crear Nuevo Post')

@section('content')
<div class="min-vh-100 bg-dark">
    <!-- Hero Section -->
    <div class="hero-gradient py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-white-50">Inicio</a></li>
                            <li class="breadcrumb-item"><a href="{{ url('/posts') }}" class="text-white-50">Posts</a></li>
                            <li class="breadcrumb-item active text-primary" aria-current="page">Nuevo Post</li>
                        </ol>
                    </nav>
                    <h1 class="display-5 fw-bold text-white mb-3">Crear Nuevo Post</h1>
                    <p class="lead text-white-50">Comparte tus conocimientos con la comunidad</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <a href="{{ url('/posts') }}" class="btn btn-outline-light rounded-pill px-4">
                        <i class="bi bi-arrow-left me-2"></i> Cancelar
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="glass-card p-4 p-lg-5 rounded-4">
                    <div class="d-flex align-items-center mb-5">
                        <div class="avatar-lg bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-4">
                            <i class="bi bi-plus-lg"></i>
                        </div>
                        <h2 class="text-white mb-0">Nuevo Contenido</h2>
                    </div>
                    
                    <div class="placeholder-content">
                        <div class="placeholder-item bg-gray-800 rounded-4 mb-4" style="height: 50px"></div>
                        <div class="placeholder-item bg-gray-800 rounded-4 mb-4" style="height: 200px"></div>
                        <div class="placeholder-item bg-gray-800 rounded-4 mb-4" style="height: 100px"></div>
                        
                        <div class="text-center mt-5">
                            <a href="#" class="btn btn-primary rounded-pill px-5 disabled" aria-disabled="true">
                                <i class="bi bi-send me-2"></i> Publicar Post
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.placeholder-item {
    position: relative;
    overflow: hidden;
}

.placeholder-item::after {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(90deg, transparent, rgba(255,255,255,0.05), transparent);
    animation: shimmer 1.5s infinite;
}

@keyframes shimmer {
    0% { transform: translateX(-100%); }
    100% { transform: translateX(100%); }
}
</style>
@endsection