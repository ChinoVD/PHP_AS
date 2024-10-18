<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <!-- Enlace a Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <!-- Enlace a la hoja de estilos personalizada -->
  <link rel="stylesheet" href="{{ asset('css/home_registrado.css') }}" />
</head>
<body>
  <!-- Tarjeta de notificaciones -->
  <div class="card">
        <!-- Encabezado de la tarjeta -->
        <div class="header">
            <span class="title">Notificaciones</span>
            <span class="date" id="fecha-actual"></span> <!-- Cambié el id a 'fecha-actual'-->
        </div>
        <!-- Lista de notificaciones -->
        <ul>
            <!-- Notificación 1 -->
            <li class="bi bi-chat-left-text ">
                <div class="column">
                    <span class="notif-title">Notificación Título</span>
                    <span class="notif-content">Contenido Notificación</span>
                </div>
            </li>

            <li class="bi bi-chat-left-text">
                <div class="column">
                    <span class="notif-title">Código Azul</span>
                    <span class="notif-content">PARO RESPIRATORIO O PARO CARDIORESPIRATORIO</span>
                </div>
            </li>

            <li class="bi bi-chat-left-text">
                <div class="column">
                    <span class="notif-title">Código Naranja</span>
                    <span class="notif-content">Llegada de varios pacientes</span>
                </div>
            </li>
        </ul>
  </div>
  <script src="{{ asset('js/ActualizaFecha.js') }}"></script>
</body>
</html>
