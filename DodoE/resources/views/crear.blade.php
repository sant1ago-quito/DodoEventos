<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Evento</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body.fondo {
            min-height: 100vh;
            margin: 0;
            padding-top: 80px; /* espacio para navbar fijo */
            overflow-y: auto;
        }

        .titulo {
            margin-bottom: 10px;
            font-size: 2.5rem;
            color: #fff;
            text-shadow: 1px 1px 4px #000;
            text-align: center;
        }

        .subtitulo {
            color: #fff;
            text-align: center;
            margin-bottom: 30px;
            text-shadow: 1px 1px 3px #000;
        }

        .form-crear {
            background: rgba(120, 0, 0, 0.85);
            max-width: 600px;
            margin: 30px auto;
            padding: 40px;
            border-radius: 18px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
        }

        label {
            color: #fff;
            font-weight: bold;
            margin-bottom: 6px;
            display: block;
        }

        .form-control {
            width: 100%;
            padding: 10px 12px;
            margin-bottom: 22px;
            border: 1.5px solid #b71c1c;
            border-radius: 7px;
            background: #fff;
            color: #222;
            font-size: 1.08rem;
        }

        .btn-rojo {
            background: #b71c1c;
            color: #fff;
            border: none;
            border-radius: 7px;
            padding: 12px 0;
            font-size: 1.15rem;
            cursor: pointer;
            width: 100%;
        }

        .btn-rojo:hover {
            background: #e53935;
        }
    </style>
</head>
<body class="fondo">
    <!-- Navbar fijo arriba -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('ver') }}">DodoEventos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContenido">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('ver') }}">Inicio</a>
                    </li>
                </ul>
                <a href="{{ route('logout') }}" class="btn btn-outline-light">Cerrar Sesión</a>
            </div>
        </div>
    </nav>

    <h1 class="titulo">Bienvenido a DodoEventos</h1>
    <h2 class="subtitulo">Administrar y crear Evento</h2>

    <form action="{{ route('guardar') }}" method="POST" class="form-crear">
        @csrf

        <label for="fk_usuario">Organizador:</label>
        <select name="fk_usuario" id="fk_usuario" class="form-control" required>
            @foreach($organizadores as $organizador)
                <option value="{{ $organizador->id }}">{{ $organizador->nombre }}</option>
            @endforeach
        </select>

        <label for="nombre_evento">Nombre del evento:</label>
        <input type="text" name="nombre_evento" id="nombre_evento" class="form-control" required>

        <label for="descripcion">Descripción:</label>
        <input type="text" name="descripcion" id="descripcion" class="form-control" required>

        <label for="fecha_evento">Fecha:</label>
        <input type="date" name="fecha_evento" id="fecha_evento" class="form-control" required>

        <label for="hora_evento">Hora:</label>
        <input type="time" name="hora_evento" id="hora_evento" class="form-control" required>

        <label for="ubicacion">Ubicación:</label>
        <input type="text" name="ubicacion" id="ubicacion" class="form-control" required>

        <label for="estado">Estado:</label>
        <select name="estado" id="estado" class="form-control" required>
            <option value="activo">Activo</option>
            <option value="inactivo">Inactivo</option>
        </select>

        <label for="asistentes">Asistentes:</label>
        <input type="number" name="asistentes" id="asistentes" class="form-control" required>

        <button type="submit" class="btn-rojo">Crear Evento</button>
    </form>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Este es el formulario para crear un nuevo evento -->