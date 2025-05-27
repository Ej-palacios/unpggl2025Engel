<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Item</title>
    <!-- Google Fonts: Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa; /* Light gray background */
        }
        .container {
            background-color: #ffffff; /* White container background */
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2, .card-title {
            color: #1e3a8a; /* Dark blue for headings */
        }
        .card-text {
            color: #4b5563; /* Darker gray for text */
        }
        .btn-primary {
            background-color: #1e3a8a; /* Dark blue for buttons */
            border-color: #1e3a8a;
        }
        .btn-primary:hover {
            background-color: #1e40af; /* Slightly lighter blue on hover */
            border-color: #1e40af;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <h2>Show Item</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sample Item</h5>
                <p class="card-text">This is a sample item description for display purposes.</p>
                <a href="#" class="btn btn-primary">View Details</a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS desde CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>