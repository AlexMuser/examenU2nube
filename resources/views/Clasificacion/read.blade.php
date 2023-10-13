<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Detalles</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #000;
            /* Fondo negro */
            color: #fff;
            /* Texto blanco */
        }

        /* Cambio de estilos para el contenedor de detalles */
        .container {
            background-color: #000;
            border: 1px solid #007BFF;
            /* Borde azul */
            padding: 20px;
        }

        h1 {
            color: #fff;
        }

        /* Cambio de estilos para las etiquetas y los valores de detalles */
        .details-label {
            color: #007BFF;
            font-weight: bold;
        }
    </style>
</head>

@include('includes.nav')

<body>
    <h1>Detalles</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="details-label">Nombre:</label>
                    <p>{{ $clasificacion->nombre }}</p>
                </div>

                <div class="form-group">
                    <label class="details-label">Estatus:</label>
                    <p>{{ $clasificacion->status == 1 ? 'Activo' : 'Baja' }}</p>
                </div>
            </div>
        </div>

        <a href="{{ route('clasificacion.index') }}" class="btn btn-primary">Volver</a>
        <!-- O utiliza la ruta correspondiente para Clasificaciones -->
    </div>

    <!-- Pie de Página -->
    @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>