<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Seleccionar Formato - Universidad La Gran Colombia</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- FontAwesome para los íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Estilos personalizados -->
    <style>
        body {
            background-color: #f8f9fa; /* Color de fondo */
            height: 100vh; /* Asegura que el fondo cubra toda la altura */
            display: flex;
            justify-content: center;
            align-items: center; /* Centra el contenido verticalmente */
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Sombra para efecto 3D */
            background-color: rgba(255, 255, 255, 0.9); /* Fondo blanco semitransparente */
            width: 100%;
            max-width: 600px; /* Ajusta el tamaño máximo del cuadro */
            padding: 2rem; /* Mayor espacio interno */
        }
        .card-header {
            background-color: #005a32; /* Color verde oscuro */
            color: #ffffff; /* Texto blanco */
            font-weight: bold;
            font-size: 1.5rem; /* Tamaño de fuente más grande */
            border-top-left-radius: 20px;
            border-top-right-radius: 20px;
            text-align: center;
            padding: 1rem;
        }
        .card-body {
            text-align: center;
        }
        .lead {
            font-size: 1.25rem;
            margin-bottom: 2rem;
        }
        .btn-primary, .btn-secondary {
            font-size: 1.1rem; /* Tamaño de fuente más grande */
            border-radius: 30px; /* Botones más redondeados */
            padding: 10px 0; /* Más relleno vertical */
            width: 100%;
        }
        .btn-primary {
            background-color: #005a32; /* Color verde oscuro */
            border-color: #005a32;
        }
        .btn-primary:hover {
            background-color: #004927; /* Color verde más oscuro al pasar el ratón */
            border-color: #004927;
        }
        .btn-secondary {
            background-color: #6c757d; /* Color gris */
            border-color: #6c757d;
        }
        .btn-secondary:hover {
            background-color: #5a6268; /* Color gris más oscuro al pasar el ratón */
            border-color: #5a6268;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="card-header">Seleccionar Formato</div>
        <div class="card-body">
            <h2 class="h4 mb-4">Universidad La Gran Colombia</h2>
            <p class="lead mb-4">Seleccione el tipo de formato que desea crear:</p>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">
                        <i class="fas fa-file-alt mr-2"></i> Microcurrículo
                    </a>
                </div>
                <div class="col-md-6 mb-3">
                    <a href="{{ url('/dashboard-plan-aprendizaje') }}" class="btn btn-secondary btn-lg">
                        <i class="fas fa-book mr-2"></i> Plan de Aprendizaje
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- FontAwesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
</body>
</html>
