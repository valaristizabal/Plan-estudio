<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Universidad La Gran Colombia</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-image: url('/images/image.png'); /* Ruta a tu imagen de fondo */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed; /* Fija la imagen de fondo al scroll */
            background-color: #f8f9fa;
            height: 100vh; /* Asegura que el fondo cubra toda la altura */
            display: flex;
            justify-content: center;
            align-items: center; /* Centra el contenido verticalmente */
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra para efecto 3D */
            min-height: 300px;
            width: 100%;
            max-width: 400px; /* Ajusta el tamaño máximo del cuadro */
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
        }
        .card-header {
            background-color: #005a32;
            color: #ffffff;
            font-weight: bold;
            font-size: 1.5rem; /* Tamaño de fuente más grande */
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5); /* Sombra del texto */
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
        }
        .card-body {
            padding: 2rem;
        }
        .btn-google, .btn-ldap {
            margin-bottom: 15px; 
            width: 100%;
            font-size: 1.1rem; /* Tamaño de fuente más grande */
            border-radius: 30px; /* Botones más redondeados */
            padding: 10px 0; /* Más relleno vertical */
        }
        .btn-google {
            background-color: #ea4335;
            color: #ffffff;
            border-color: #ea4335;
        }
        .btn-google:hover {
            background-color: #d33f2f;
            border-color: #d33f2f;
        }
        .btn-ldap {
            background-color: #005a32;
            color: #ffffff;
            border-color: #005a32;
        }
        .btn-ldap:hover {
            background-color: #004927;
            border-color: #004927;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header text-center">{{ __('Iniciar sesión') }}</div>
        <div class="card-body">
            <div class="text-center">
                <p class="lead mb-4">Seleccione una opción para iniciar sesión:</p>
                <a href="{{ route('auth.google') }}" class="btn btn-google btn-lg">Google</a>
                <a href="#" class="btn btn-ldap btn-lg">Iniciar sesión con LDAP</a>
                <a href="{{ url('/select-format') }}" class="btn btn-ldap btn-lg">Ingresar directamente</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
