<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Moderno</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { padding-top: 70px; }
        .hero {
            height: 400px;
            background: linear-gradient(135deg, #6e8efb, #a777e3);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
        }
    </style>
</head>
<body>
    <x-navbar 
        brand="TechVision" 
        brandImage="https://via.placeholder.com/30" 
        colorScheme="dark">
        
        <x-slot name="navItems">
            <li class="nav-item active">
                <a class="nav-link" href="#"><i class="fas fa-home me-1"></i> Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-box me-1"></i> Productos</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                    <i class="fas fa-th-list me-1"></i> Categorías
                </a>
                <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Tecnología</a></li>
                    <li><a class="dropdown-item" href="#">Electrodomésticos</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Ofertas Especiales</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-info-circle me-1"></i> Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-phone me-1"></i> Contacto</a>
            </li>
        </x-slot>
        
        <x-slot name="rightContent">
            <button class="btn btn-outline-light me-2">
                <i class="fas fa-user me-1"></i> Login
            </button>
            <button class="btn btn-warning">
                <i class="fas fa-shopping-cart me-1"></i> Carrito
                <span class="badge bg-danger ms-1">3</span>
            </button>
        </x-slot>
    </x-navbar>
    
    <div class="hero">
        <div class="text-center">
            <h1 class="display-4 fw-bold">TechVision Pro</h1>
            <p class="lead">La mejor tecnología a tu alcance</p>
        </div>
    </div>
    
    <div class="container">
        <!-- Contenido de la página -->
        <div style="height: 1000px;"></div> <!-- Solo para hacer scroll -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>