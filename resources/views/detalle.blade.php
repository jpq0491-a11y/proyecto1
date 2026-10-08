{{-- Aqui se ve la informacion personal de un registro; se puede editar o volver a la lista. --}}
{{-- La URL lleva el indice (id) de la persona: /informacion-personal/{id} --}}
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del registro</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">

    <h1>Registro #{{ $registro->id }}</h1>

    <dl class="row mt-3">
        <dt class="col-sm-3">Nombre</dt>
        <dd class="col-sm-9">{{ $registro->nombre }}</dd>

        <dt class="col-sm-3">Correo</dt>
        <dd class="col-sm-9">{{ $registro->correo }}</dd>

        <dt class="col-sm-3">Fecha de Nacimiento</dt>
        <dd class="col-sm-9">{{ $registro->fecha_nacimiento }}</dd>

        <dt class="col-sm-3">Registrado</dt>
        <dd class="col-sm-9">{{ $registro->created_at->format('d/m/Y H:i') }}</dd>
    </dl>

    <a href="{{ route('informacion-personal.edit', $registro) }}" class="btn btn-warning">Editar</a>
    <a href="{{ route('informacion-personal.index') }}" class="btn btn-secondary">Volver</a>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
