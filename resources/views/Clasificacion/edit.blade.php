<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Editar Clasificación</title>
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
    <h1>Editar Clasificación</h1>

    {!! Form::model($clasificacion, ['method' => 'PATCH', 'route' => ['clasificacion.update', $clasificacion->id]]) !!}
    <div class="form-group">
        {!! Form::label('nombre', 'Nombre de la clasificación') !!}
        {!! Form::text('nombre', $clasificacion->nombre, ['class' => 'form-control', 'placeholder' => 'Ingresa nombre de
        la clasificación']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Estatus') !!}
        {!! Form::select('status', ['1' => 'Activo', '0' => 'Baja'], $clasificacion->status, ['class' =>
        'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar Clasificación', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
</body>

@include('includes.footer')

</html>