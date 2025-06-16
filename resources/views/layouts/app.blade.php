<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <!-- Font Inter (opcional) -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine JS para interactividad -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <title>@yield('titulo') | ModernBlog</title>
    
    <style>
        :root {
            --primary-color: #6366f1;
            --primary-hover: #4f46e5;
            --glass-opacity: 0.15;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f8fafc;
            color: #1e293b;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        @media (prefers-color-scheme: dark) {
            body {
                background-color: #0f172a;
                color: #f8fafc;
            }
            
            .glass-card {
                background: rgba(15, 23, 42, 0.5);
                border: 1px solid rgba(255, 255, 255, 0.05);
            }
        }
        
        .hero-gradient {
            background: linear-gradient(135deg, var(--primary-color) 0%, #1e293b 100%);
        }
        
        .min-h-main {
            min-height: calc(100vh - 120px);
        }
    </style>
    
    @stack('styles')
</head>
<body x-data="{ mobileMenuOpen: false }">
    <!-- Navbar Responsivo -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ url('/') }}">
                <i class="bi bi-stars me-2 text-primary"></i>ModernBlog
            </a>
            
            <button class="navbar-toggler" 
                    type="button" 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    aria-controls="navbarContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" 
                 id="navbarContent"
                 x-bind:class="{'show': mobileMenuOpen}">
                 
                @include('components.menu')
                
                <div class="ms-auto d-flex gap-2">
                    <a href="#" class="btn btn-sm btn-outline-light rounded-pill px-3">
                        <i class="bi bi-person"></i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary rounded-pill px-3">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Contenido Principal -->
    <main class="flex-grow-1 py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white-50 py-4 mt-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">© {{ date('Y') }} ModernBlog. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    @hasSection('autores')
                        @yield('autores')
                    @else
                        <p class="mb-0">Desarrollado con <i class="bi bi-heart-fill text-danger"></i> por <span class="text-primary">Tu Equipo</span></p>
                    @endif
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts adicionales -->
    @hasSection('scripts')
        @yield('scripts')
    @endif
    
    @stack('scripts')
</body>
</html>