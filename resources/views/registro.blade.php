<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>Registro</title>
    <link rel="stylesheet" href="{{ asset('css/globales.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
</head>
<body>
    <div class="contenedor">
        <div class="tableta">
            <div class="titulo">
                <h1>Registro</h1>
            </div>

            <form action="{{ route('registro.procesar') }}" method="POST"> <!-- Agrega el formulario aquí -->
                @csrf <!-- Este es un token de seguridad para proteger contra ataques CSRF -->
                <div class="campos"> <!-- Aquí se agrega la clase campos -->
                    <div class="form nombre">
                        <input type="text" name="nombre" id="nombre" autocomplete="off" required />
                        <label for="nombre" class="label-name">
                            <span class="content-name">Nombre:</span>
                        </label>
                    </div>

                    <div class="form apellido">
                        <input type="text" name="apellido" id="apellido" autocomplete="off" required />
                        <label for="apellido" class="label-name">
                            <span class="content-name">Apellido:</span>
                        </label>
                    </div>
                    
                    <div class="form rol">
                        <select name="rol" id="rol" required>
                            <option value="" disabled selected>Seleccione su rol</option>
                            <option value="medico">Médico</option>
                            <option value="enfermero">Enfermero</option>
                        </select>
                    </div>

                    <div class="form email">
                        <input type="email" name="email" id="email" autocomplete="off" required />
                        <label for="email" class="label-name">
                            <span class="content-name">Correo Electrónico:</span>
                        </label>
                    </div>

                    <div class="form password">
                        <input type="password" name="password" id="password" autocomplete="off" required />
                        <label for="password" class="label-name">
                            <span class="content-name">Contraseña:</span>
                        </label>
                    </div>

                    <div class="form password_2">
                        <input type="password" name="password_confirmacion" id="repeat_password" autocomplete="off" required />
                        <label for="repeat_password" class="label-name">
                            <span class="content-name">Repetir Contraseña:</span>
                        </label>
                    </div>
                    
                    <div class="botones">
                        <button type="button" class="recuperar-contraseña">¿Olvidaste tu contraseña?</button>  
                        <button type="submit">Registrar</button>
                    </div>
                </div>
            </form> <!-- Cierra el formulario aquí -->
        </div>
    </div>
</body>
</html>
