<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba de Componente Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="mb-4">Prueba del Componente Card</h1>
        
        <div class="row">
            <div class="col-md-4 mb-4">
                <x-card title="Tarjeta Básica">
                    Este es el contenido de la tarjeta básica.
                    Puedes poner cualquier contenido HTML aquí.
                </x-card>
            </div>
            
            <div class="col-md-4 mb-4">
                <x-card title="Tarjeta con Footer">
                    Contenido principal de la tarjeta.
                    
                    <x-slot name="footer">
                        <button class="btn btn-primary">Aceptar</button>
                        <button class="btn btn-secondary">Cancelar</button>
                    </x-slot>
                </x-card>
            </div>
            
            <div class="col-md-4 mb-4">
                <x-card 
                    title="Tarjeta Personalizada"
                    headerClass="bg-primary text-white"
                    bodyClass="bg-light"
                    footerClass="bg-info text-white">
                    
                    <p>Contenido con estilos personalizados.</p>
                    <ul>
                        <li>Item 1</li>
                        <li>Item 2</li>
                    </ul>
                    
                    <x-slot name="footer">
                        Pie de página personalizado
                    </x-slot>
                </x-card>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <x-card>
                    <h5 class="card-title">Tarjeta sin título en el slot</h5>
                    <p>Esta tarjeta no usa el parámetro title sino que lo define directamente en el contenido.</p>
                    <x-slot name="footer">
                        <small class="text-muted">Última actualización: hoy</small>
                    </x-slot>
                </x-card>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>