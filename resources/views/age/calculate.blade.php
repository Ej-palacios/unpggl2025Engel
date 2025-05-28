<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Edad</title>
    <style>
     body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f9fafb;
        color: #111827;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background-color: white;
        border-radius: 12px;
        padding: 40px;
        width: 90%;
        max-width: 500px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h1 {
        color:rgb(177, 14, 163);
        margin-bottom: 20px;
    }

    .result {
        font-size: 22px;
        font-weight: bold;
        color:rgb(0, 0, 0);
        margin-top: 10px;
    }

    .label {
        font-weight: 500;
        font-size: 18px;
        color:rgb(0, 0, 0);
    }

    .value {
        font-size: 20px;
        color: #111827;
        margin-bottom: 10px;
    }
        .error {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Calculadora de Edad</h1>

        @isset($error)
            <div class="error">{{ $error }}</div>
        @else
            @if($mode === 'birth_year')
                <p class="result">Naciste en el año <strong>{{ $birthYear }}</strong>.</p>
                <p class="result">Tu edad es: <strong>{{ $age }}</strong> años.</p>
            @elseif($mode === 'age')
                <p class="result">Tu edad es: <strong>{{ $age }}</strong> años.</p>
                <p class="result">Tu año de nacimiento es: <strong>{{ $birthYear }}</strong>.</p>
            @endif
        @endisset
    </div>
</body>
</html>
