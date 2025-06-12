<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Componente de Botón</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Prueba del Componente de Botón</h1>
        
        <div class="mb-3">
            <h4>Botones básicos:</h4>
            <x-button type="primary">Primario</x-button>
            <x-button type="secondary">Secundario</x-button>
            <x-button type="success">Éxito</x-button>
            <x-button type="danger">Peligro</x-button>
            <x-button type="warning">Advertencia</x-button>
            <x-button type="info">Información</x-button>
            <x-button type="light">Light</x-button>
            <x-button type="dark">Dark</x-button>
            <x-button type="link">Enlace</x-button>
        </div>
        
        <div class="mb-3">
            <h4>Botones con atributos adicionales:</h4>
            <x-button type="primary" id="btn-submit" class="me-2" data-test="123">Enviar</x-button>
            <x-button type="success" disabled>Desactivado</x-button>
        </div>
        
        <div class="mb-3">
            <h4>Botón con icono:</h4>
            <x-button type="info">
                <i class="bi bi-check-circle"></i> Aceptar
            </x-button>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>