<!DOCTYPE html>
<html class="register">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registro</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <img src="/img/logo.png" alt="logo">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div>
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="email">Correo electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirmar contraseña:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">Registrarse</button>
        </form>
        
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{ route('login') }}">¿Ya tienes cuenta? Inicia sesión</a>
    </body>
</html>
