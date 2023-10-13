<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Netflix 2</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #000;
            /* Fondo negro */
            color: #fff;
            /* Texto blanco */
        }

        header {
            background-color: #007BFF;
            /* Azul */
        }

        /* Cambio de estilos para tarjetas de películas */
        .card {
            background-color: #000;
            border: 1px solid #007BFF;
            /* Borde azul */
        }

        .card-title,
        .card-text {
            color: #fff;
        }

        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
            /* Botón azul */
        }

        .btn-agregar {
            background-color: #007BFF;
            border-color: #007BFF;
            color: #fff;
            margin-top: 15px;
        }
    </style>
</head>

<body>
    @include('includes.nav')

    <div class="container-fluid p-0">
        <!-- Encabezado de la Página -->
        <header class="bg-dark text-light text-center py-5">
            <h1>Netflix 2 lo mejor en películas 5K</h1>
            <p>Disfruta de las mejores películas y series</p>
        </header>

        <!-- Sección de Contenido -->
        <section class="container my-5">
            <div class="row">
                @foreach($peliculas as $pelicula)
                <div class="col-md-3 mb-4">
                    <div class="card">
                        <img src="{{ asset('uploads/peliculas/' . $pelicula->foto) }}" class="card-img-top"
                            alt="{{ $pelicula->titulo }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pelicula->titulo }}</h5>
                            <p class="card-text">{{ $pelicula->genero->nombre }}</p>
                            <a href="{{ route('peliculas.show', $pelicula->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('peliculas.edit', $pelicula->id) }}" class="btn btn-warning">Editar</a>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['peliculas.destroy', $pelicula->id]]) !!}
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <div class="text-center">
            <a href="{{ route('peliculas.create') }}" class="btn btn-agregar">Agregar una nueva película</a>
        </div>

        <!-- Pie de Página -->
        @include('includes.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>