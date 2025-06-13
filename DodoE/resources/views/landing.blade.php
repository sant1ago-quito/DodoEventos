<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <title>Bienvenido</title>
</head>
<body>
    <h1 class="titulo">Bienvenido a DodoEventos</h1>
    <a class="link" href="{{ route('login') }}">Iniciar Sesión</a> |
    <a class="link" href="{{ route('register') }}">Registrarse</a>
</body>
</html>
