@extends('layouts.app')

@section('titulo', 'Editar Post')

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
                            <li class="breadcrumb-item active text-primary" aria-current="page">Editar</li>
                        </ol>
                    </nav>
                    <h1 class="display-5 fw-bold text-white mb-3">Editar Post</h1>
                    <p class="lead text-white-50">Actualiza la información de tu publicación</p>
                </div>
                <div class="col-md-4 text-md-end">
                    <div class="d-flex gap-2 justify-content-md-end">
                        <a href="{{ url('/posts') }}" class="btn btn-outline-light rounded-pill px-4">
                            <i class="bi bi-x me-2"></i> Cancelar
                        </a>
                        <a href="{{ url('/posts') }}" class="btn btn-primary rounded-pill px-4">
                            <i class="bi bi-check2 me-2"></i> Guardar
                        </a>
                    </div>
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
                            <i class="bi bi-pencil"></i>
                        </div>
                        <h2 class="text-white mb-0">Editar Contenido</h2>
                    </div>
                    
                    <div class="placeholder-content">
                        <div class="placeholder-item bg-gray-800 rounded-4 mb-4" style="height: 50px"></div>
                        <div class="placeholder-item bg-gray-800 rounded-4 mb-4" style="height: 300px"></div>
                        
                        <div class="d-flex justify-content-between mt-5">
                            <a href="#" class="btn btn-outline-danger rounded-pill px-4">
                                <i class="bi bi-trash me-2"></i> Eliminar
                            </a>
                            <a href="{{ url('/posts') }}" class="btn btn-primary rounded-pill px-4">
                                <i class="bi bi-check2 me-2"></i> Guardar Cambios
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection