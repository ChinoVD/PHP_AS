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
    <div class="navbar">
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
                            <a class="nav-link" href="formulario_emergencia">Emergencias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Configuración</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="contenido">
    <!-- Tarjeta de Descripción de Código -->
    <div class="card descripcion">
        <!-- Encabezado de la tarjeta -->
        <div class="header">
            <span class="title">Descripción de Código</span>
            <span class="date">{{ date('d-m-Y') }}</span>
        </div>
        <!-- Lista de descripciones de código -->
        <ul>
            <!-- Descripción 1 -->
            <li class="bi bi-chat-left-text">
                <div class="column">
                    <span class="desc-title">Descripción Título</span>
                    <span class="desc-content">Contenido Descripción</span>
                </div>
            </li>
            <!-- Descripción 2 -->
            <li class="bi bi-chat-left-text">
                <div class="column">
                    <span class="desc-title">Código Azul</span>
                    <span class="desc-content">PARO RESPIRATORIO O PARO CARDIORESPIRATORIO</span>
                </div>
            </li>
            <!-- Descripción 3 -->
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
        <!-- Encabezado de la tarjeta -->
        <div class="header">
            <span class="title">Notificaciones</span>
            <span class="date">{{ date('d-m-Y') }}</span>
        </div>
        <!-- Lista de notificaciones -->
        <ul>
            <!-- Notificación 1 -->
            <li class="bi bi-chat-left-text" onclick="toggleDetails(1)">
                <div class="column">
                    <span class="notif-title">Notificación Título</span>
                    <span class="notif-content">Contenido Notificación</span>
                </div>
            </li>
            <li class="bi bi-chat-left-text" onclick="toggleDetails(2)">
                <div class="column">
                    <span class="notif-title">Código Azul</span>
                    <span class="notif-content">PARO RESPIRATORIO O PARO CARDIORESPIRATORIO</span>
                </div>
            </li>
            <li class="bi bi-chat-left-text" onclick="toggleDetails(3)">
                <div class="column">
                    <span class="notif-title">Código Naranja</span>
                    <span class="notif-content">Llegada de varios pacientes</span>
                </div>
            </li>
        </ul>
    </div>
    <!-- Tarjeta de empleados en turno -->
    <div class="card empleados">
        <!-- Encabezado de la tarjeta -->
        <div class="header">
            <span class="title">Empleados en Turno</span>
            <span class="date">{{ date('d-m-Y') }}</span>
        </div>
        <!-- Lista de empleados -->
        <ul>
            <!-- Empleado 1 -->
            <li class="bi bi-person">
                <div class="column">
                    <span class="employee-name">Empleado Título 1</span>
                    <span class="employee-role">Rol del Empleado 1</span>
                </div>
            </li>
            <!-- Empleado 2 -->
            <li class="bi bi-person">
                <div class="column">
                    <span class="employee-name">Empleado Título 2</span>
                    <span class="employee-role">Rol del Empleado 2</span>
                </div>
            </li>
            <!-- Empleado 3 -->
            <li class="bi bi-person">
                <div class="column">
                    <span class="employee-name">Empleado Título 3</span>
                    <span class="employee-role">Rol del Empleado 3</span>
                </div>
            </li>
        </ul>
    </div>
    <div class="informacion_paciente">
        <div class="info_paciente_entrada">
            <div class="details" id="details-1" style="display: none;">
                <p><strong>Causas:</strong> Shock hipovolémico.</p>
                <p><strong>Código:</strong> Código Naranja</p>
            </div>
        </div>
        <div class="datos_paciente">
            <div class="details" id="details-2" style="display: none;">
                <p><strong>Nombre del Paciente:</strong> María López</p>
                <p><strong>Edad:</strong> 60 años</p>
            </div>
        </div>
        <div class="observaciones_paciente"></div>
        <div class="historial_clinico"></div>
    </div>
    

</div>

<!-- Enlace al JavaScript de Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Enlace a tu archivo JavaScript externo -->
<script src="{{ asset('js/detalles_noti.js') }}"></script>
</body>
</html>

