<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
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
        </style>
</head>
<body>
     <!-- Navbar fijo arriba -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">DodoEventos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContenido" aria-controls="navbarContenido" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarContenido">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">Inicio</a>
                    </li>
                </ul>
                <a href="{{ route('logout') }}" class="btn btn-outline-light">Cerrar Sesión</a>
            </div>
        </div>
    </nav>
      <h1>Bienvenido a DodoEventos</h1>
    <h2>Editar evento</h2>
    <form action="{{ route('actualizar', $evento->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="org">Organizador:</label>
    <select name="fk_usuario">
        @foreach($organizadores as $organizador)
            <option value="{{ $organizador->id }}" {{ $evento->fk_usuario == $organizador->id ? 'selected' : '' }}>
                {{ $organizador->nombre }}
            </option>
        @endforeach
    </select><br><br>

    <label for="nombre">Nombre del evento:</label>
    <input type="text" name="nombre_evento" value="{{ $evento->nombre_evento }}" required><br><br>

    <label for="descripcion">Descripción:</label>
    <input type="text" name="descripcion" value="{{ $evento->descripcion }}" required><br><br>

    <label for="fecha">Fecha:</label>
    <input type="date" name="fecha_evento" value="{{ $evento->fecha_evento }}" required><br><br>

    <label for="hora">Hora:</label>
    <input type="time" name="hora_evento" value="{{ $evento->hora_evento }}" required><br><br>

    <label for="ubicacion">Ubicación:</label>
    <input type="text" name="ubicacion" value="{{ $evento->ubicacion }}" required><br><br>

    <label for="estado">Estado:</label>
    <select name="estado" required>
        <option value="activo" {{ $evento->estado == 'activo' ? 'selected' : '' }}>Activo</option>
        <option value="inactivo" {{ $evento->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
    </select><br><br>

    <label for="asistentes">Asistentes:</label>
    <input type="number" name="asistentes" value="{{ $evento->asistentes }}" required><br><br>

        <a href="{{route ('index')}}"><button type="submit">Actualizar Evento</button></a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>