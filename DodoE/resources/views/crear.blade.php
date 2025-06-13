<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Evento</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <style>
        body.fondo {
            min-height: 100vh;
            margin: 0;
            padding: 0;
            overflow-y: auto; /* Asegura scroll vertical */
        }
        .titulo {
            margin-top: 30px;
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
            margin: 30px auto 0 auto; /* antes: 0 auto */
            padding: 40px 40px 30px 40px;
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
            transition: border-color 0.2s;
        }
        .form-control:focus {
            border-color: #e53935;
            outline: none;
        }
        .btn-rojo {
            background: #b71c1c;
            color: #fff;
            border: none;
            border-radius: 7px;
            padding: 12px 0;
            font-size: 1.15rem;
            cursor: pointer;
            transition: background 0.2s;
            width: 100%;
            margin-top: 10px;
        }
        .btn-rojo:hover {
            background: #e53935;
        }
    </style>
</head>
<body class="fondo">
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
</body>
</html>