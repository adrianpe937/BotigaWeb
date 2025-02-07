<!DOCTYPE html>
<html class="login">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <img src="/img/logo.png" alt="logo">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="username">Usuario:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div>
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Iniciar sesión</button>
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
        <a href="{{ route('register') }}">¿No tienes cuenta? Regístrate</a>
    </body>
</html>