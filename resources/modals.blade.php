<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Componente Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4">Prueba del Componente Modal</h1>
        
        <!-- Botón para abrir modal básico -->
        <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#basicModal">
            Abrir Modal Básico
        </button>
        
        <!-- Botón para abrir modal con footer -->
        <button type="button" class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#footerModal">
            Abrir Modal con Footer
        </button>
        
        <!-- Botón para abrir modal grande -->
        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#largeModal">
            Abrir Modal Grande
        </button>
        
        <!-- Modal Básico -->
        <x-modal modalId="basicModal" title="Modal Básico">
            <p>Este es un modal básico con solo contenido en el cuerpo.</p>
            <p>Puedes incluir cualquier contenido HTML aquí.</p>
        </x-modal>
        
        <!-- Modal con Footer -->
        <x-modal modalId="footerModal" title="Modal con Acciones">
            <p>Este modal incluye un footer con acciones.</p>
            <p>Intenta cerrar el modal usando los botones inferiores.</p>
            
            <x-slot name="footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar Cambios</button>
            </x-slot>
        </x-modal>
        
        <!-- Modal Grande -->
        <x-modal modalId="largeModal" title="Modal Grande" size="lg">
            <h4>Este es un modal de tamaño grande</h4>
            <p>Perfecto para contenido más extenso o formularios complejos.</p>
            
            <div class="mb-3">
                <label for="exampleInput" class="form-label">Ejemplo de input</label>
                <input type="text" class="form-control" id="exampleInput">
            </div>
            
            <div class="mb-3">
                <label for="exampleTextarea" class="form-label">Ejemplo de textarea</label>
                <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
            </div>
            
            <x-slot name="footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Enviar</button>
            </x-slot>
        </x-modal>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>