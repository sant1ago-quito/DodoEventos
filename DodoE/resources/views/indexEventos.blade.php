<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <style>
        body.fondo {
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        .titulo {
            margin-top: 30px;
            margin-bottom: 10px;
            font-size: 2.5rem;
            color: #fff;
            text-shadow: 1px 1px 4px #000;
            text-align: center;
        }
        .tabla-eventos {
            width: 95%;
            margin: 30px auto;
            border-radius: 12px;
            overflow: hidden;
            background: rgba(255,255,255,0.07);
            box-shadow: 0 4px 24px rgba(0,0,0,0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 14px 10px;
            text-align: left;
            color: #fff;
        }
        th {
            background: #375a9e;
            color: #fff;
            font-weight: bold;
        }
        tr {
            background: #22335a;
        }
        tr:hover {
            background: #2a3d66;
        }
        .btn-custom {
            background: #2a3d66;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 8px 18px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .btn-custom:hover {
            background: #1b2742;
        }
        .acciones {
            display: flex;
            gap: 8px;
        }
        .insertar-btn {
            display: block;
            margin: 0 auto 20px auto;
        }
    </style>
</head>
<body class="fondo">
    <h1 class="titulo">Lista de Eventos</h1>
    <a href="{{ route('crear') }}" class="btn-custom insertar-btn link">Insertar nuevo Evento</a>
    <div class="tabla-eventos">
        <table>
            <thead>
                <tr>
                    <th>Organizador</th>
                    <th>Evento</th>
                    <th>Descripción</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Ubicación</th>
                    <th>Estado</th>
                    <th>Asistentes</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->Eventos->nombre }}</td>
                        <td>{{ $event->nombre_evento }}</td>
                        <td>{{ $event->descripcion }}</td>
                        <td>{{ $event->fecha_evento }}</td>
                        <td>{{ $event->hora_evento }}</td>
                        <td>{{ $event->ubicacion }}</td>
                        <td>{{ $event->estado }}</td>
                        <td>{{ $event->asistentes }}</td>
                        <td class="acciones">
                            <a href="{{ route('editar', $event->id) }}" class="btn-custom link">Editar</a>
                            <!--
                            <form action="{{ route('borrar', $event->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn-custom link">Borrar</button>
                            </form>
                            -->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>