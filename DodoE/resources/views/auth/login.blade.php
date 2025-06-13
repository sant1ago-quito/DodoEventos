<!DOCTYPE html>
<html>
<head>
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="{{ asset('estilos.css') }}">

</head>
<body>
<div class="contenedor-login">
    <form method="POST" action="{{ route('login') }}" class="formulario">
        <h1 style="color: white;">Iniciar Sesión</h1>
        @csrf
        <div class="grupo-f">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required autofocus>
        </div>
        <div class="grupo-f">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" id="contraseña"  class="form-control" required>
        </div>
        <button type="submit" class="btn">Entrar</button>
    </form>
</div>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>