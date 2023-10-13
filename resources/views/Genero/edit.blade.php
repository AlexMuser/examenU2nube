<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Género</title>
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

        /* Cambio de estilos para los campos de formulario */
        label {
            color: #fff;
        }

        input {
            background-color: #000;
            border: 1px solid #007BFF;
            color: #fff;
        }

        /* Cambio de estilos para los botones y selección de estatus */
        .btn-primary {
            background-color: #007BFF;
            border-color: #007BFF;
        }

        /* Cambio de estilos para el pie de página */
        footer {
            background-color: #007BFF;
            /* Azul */
            color: #fff;
            /* Texto blanco */
            text-align: center;
            padding: 10px;
        }
    </style>
</head>

@include('includes.nav')

<body>
    <h1>Editar Género</h1>

    {!! Form::model($genero, ['method' => 'PATCH', 'url' => '/genero/' . $genero->id]) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre del género') !!}
        {!! Form::text('nombre', $genero->nombre, ['class' => 'form-control', 'placeholder' => 'Ingresa nombre del
        género']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Estatus') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $genero->status, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Género', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</body>

@include('includes.footer')

</html>