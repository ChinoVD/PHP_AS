<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/globales.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
<div class="contenedor">
    <div class="registro">
        <h1>Iniciar Sesión</h1>
        <div class="campos">
            <div class="form">
                <input type="email" name="email" id="email" autocomplete="off" required />
                <label for="email" class="label-name">
                    <span class="content-name">Correo Electrónico</span>
                </label>
            </div>

            <div class="form">
                <input type="password" name="password" id="password" autocomplete="off" required />
                <label for="password" class="label-name">
                    <span class="content-name">Contraseña</span>
                </label>
            </div>

            <button type="submit">Iniciar Sesión</button>
        </div>
    </div>
</div>

</body>
</html>
