<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Película</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #000;
            /* Fondo negro */
            color: #fff;
            /* Texto blanco */
        }

        /* Cambio de estilos para el formulario */
        form {
            background-color: #000;
            border: 1px solid #007BFF;
            /* Borde azul */
            padding: 20px;
        }

        label {
            color: #fff;
        }

        /* Cambio de estilos para los select */
        select {
            background-color: #000;
            color: #fff;
        }

        /* Cambio de estilos para el botón */
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
            color: #fff;
        }
    </style>
</head>

@include('includes.nav')

<body>
    <h1>Editar Película</h1>

    <div class="container">
        <form method="POST" action="{{ route('peliculas.update', $pelicula->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="titulo">Título de la película</label>
                <input type="text" name="titulo" class="form-control" placeholder="Ingresa el título de la película"
                    value="{{ $pelicula->titulo }}">
            </div>

            <div class="form-group">
                <label for="id_genero">Género de la película</label>
                <select name="id_genero" class="form-control">
                    @foreach ($generos as $id => $genero)
                    <option value="{{ $id }}" {{ $id==$pelicula->id_genero ? 'selected' : '' }}>
                        {{ $genero }}
                    </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="id_clasific">Clasificación de la película</label>
                <select name="id_clasific" class="form-control">
                    @foreach ($clasificaciones as $id => $clasificacion)
                    <option value="{{ $id }}" {{ $id==$pelicula->id_clasific ? 'selected' : '' }}>
                        {{ $clasificacion }}
                    </option>
                    @endforeach
                </select>
            </div>

            <img src="{{ asset('uploads/peliculas/' . $pelicula->foto) }}" alt="Imagen actual" width="150">
            <div class="form-group">
                <label for="foto">Cambiar imagen de la película</label>
                <input type="file" name="foto" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Editar Película</button>
        </form>
    </div>

    <!-- Pie de Página -->
    @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>