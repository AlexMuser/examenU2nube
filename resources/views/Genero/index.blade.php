<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Listado de Géneros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            background-color: #000;
            /* Fondo negro */
            color: #fff;
            /* Texto blanco */
        }

        /* Cambio de estilos para el encabezado */
        h1 {
            color: #fff;
        }

        /* Cambio de estilos para el enlace de agregar un nuevo género */
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }

        /* Cambio de estilos para la tabla */
        table {
            background-color: #000;
            border: 1px solid #007BFF;
            color: #fff;
        }

        table th {
            background-color: #007BFF;
        }

        /* Cambio de estilos para los botones de Ver, Editar y Eliminar */
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-agregar {
            background-color: #007BFF;
            border-color: #007BFF;
            color: #fff;
            margin-top: 15px;
        }
    </style>
</head>

@include('includes.nav')

<body>
    <h1>Listado de Géneros</h1>
    <a href="{{ route('genero.create') }}" class="btn btn-primary">Agregar un nuevo género</a>

    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($generos as $genero)
            <tr>
                <td>{{ $genero->id }}</td>
                <td>{{ $genero->nombre }}</td>
                <td>
                    <a href="{{ route('genero.show', $genero->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('genero.edit', $genero->id) }}" class="btn btn-warning">Editar</a>
                    {!! Form::open(['method' => 'DELETE', 'route' => ['genero.destroy', $genero->id]]) !!}
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br />

    <div class="text-center">
        <a href="{{ route('genero.create') }}" class="btn btn-agregar">Agregar una nuevo genero</a>
    </div>

    @include('includes.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>