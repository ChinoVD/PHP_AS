<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital - Emergencias</title>
    <link rel="stylesheet" href="{{ asset('css/home_registrado.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="navbar-container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Hospital</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Notificaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('emergencia') }}">Emergencias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="contenido">
        <!-- Tarjeta de Descripción de Código -->
        <div class="card descripcion">
            <div class="header">
                <span class="title">Descripción de Código</span>
                <span class="date">{{ date('d-m-Y') }}</span>
            </div>
            <ul>
                <li class="bi bi-chat-left-text">
                    <div class="column">
                        <span class="desc-title">Descripción Título</span>
                        <span class="desc-content">Contenido Descripción</span>
                    </div>
                </li>
                <li class="bi bi-chat-left-text">
                    <div class="column">
                        <span class="desc-title">Código Azul</span>
                        <span class="desc-content">PARO RESPIRATORIO O PARO CARDIORESPIRATORIO</span>
                    </div>
                </li>
                <li class="bi bi-chat-left-text">
                    <div class="column">
                        <span class="desc-title">Código Naranja</span>
                        <span class="desc-content">Llegada de varios pacientes</span>
                    </div>
                </li>
            </ul>
        </div>

        <!-- Tarjeta de notificaciones -->
        <div class="card notificaciones">
            <div class="header">
                <span class="title">Notificaciones</span>
                <span class="date">{{ date('d-m-Y') }}</span>
            </div>
            <ul>
                @if(isset($notificaciones) && count($notificaciones) > 0)
                    @foreach($notificaciones as $index => $notificacion)
                        <li class="bi bi-chat-left-text" onclick="toggleDetails({{ $index }})" data-detalles='@json($notificacion)'>
                            <div class="column">
                                <span class="notif-title">Código: {{ $notificacion['nombre_codigo'] }}</span>
                                <span class="notif-content">Descripción: {{ $notificacion['descripcion'] }}</span>
                            </div>
                        </li>
                    @endforeach
                @else
                    <li>No hay notificaciones disponibles.</li>
                @endif
            </ul>
        </div>

        <!-- Nueva sección para detalles del paciente -->
        <div class="card informacion_paciente">
            <div class="header">
                <span class="title">Información del Paciente</span>
            </div>
            <div class="details">
                <div class="info_paciente_entrada">
                    <!-- Aquí no puedes usar $notificacion directamente, necesitarás un mecanismo para mostrar los datos correctos -->
                </div>
            </div>
        </div>

        <!-- Tarjeta de empleados en turno -->
        <div class="card empleados">
            <div class="header">
                <span class="title">Empleados en Turno</span>
                <span class="date">{{ date('d-m-Y') }}</span>
            </div>
            <ul>
                @foreach($empleadosEnTurno as $empleado)
                    <li class="bi bi-person">
                        <div class="column">
                            <span class="employee-name">{{ $empleado['nombre'] }}</span>
                            <span class="employee-rut">{{ $empleado['rut'] }}</span>
                            <span class="employee-hours">{{ $empleado['hora_inicio'] }} - {{ $empleado['hora_fin'] }}</span>
                            <span class="employee-shift">{{ $empleado['turno'] }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Enlace al JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Enlace a tu archivo JavaScript externo -->
    <script src="{{ asset('js/notificaciones.js') }}"></script>
    <script src="{{ asset('js/mostrarDetalles.js') }}"></script>
</body>
</html>
