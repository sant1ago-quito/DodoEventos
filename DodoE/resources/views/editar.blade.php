<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    
</body>
</html>