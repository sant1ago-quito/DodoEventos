<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="{{ asset('estilos.css') }}">
    <title>Registro</title>
</head>
<body>
    
    @if ($errors->any())
    <div>
        <div> Algo salió mal </div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
    @endif
    <div class="contenedor-login">
        <h2 style="color: white;">Registro</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="grupo-f">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre') }}" autofocus>
        </div>
        <div class="grupo-f">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
        </div>
        <div class="grupo-f">
            <label for="contraseña">Contraseña</label>
            <input type="password" class="form-control" name="contraseña" id="contraseña">
            @error('contraseña')
                <div style="color: red;">{{ $message }}</div>
            @enderror
        </div>
        <div class="grupo-f">
            <label for="contraseña_confirmation">Confirmar Contraseña</label>
            <input type="password" class="form-control" name="contraseña_confirmation" id="contraseña_confirmation">
        </div>
        <div class="grupo-f">
            <label for="rol">Rol</label>
            <select name="rol" class="form-control" id="rol">
                <option value="">Selecciona un rol</option>
                <option value="admin" {{ old('rol') == 'admin' ? 'selected' : '' }}>Admin</option>
                <option value="usuario" {{ old('rol') == 'usuario' ? 'selected' : '' }}>Usuario</option>
            </select>
        </div><br>
        <div>
            <button class="btn" type="submit">Registrarse</button>
        </div>
    </form>
</div>
</body>
</html>