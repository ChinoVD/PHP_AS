<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Emergencia</title>
    <link rel="stylesheet" href="{{ asset('css/formulario_emergencia.css') }}">
</head>
<body>
    <div class="container">
        <div class="volver-home">
            <a href="home_registrado">← Volver a Home</a>
        </div>
        <h1>Registro de Emergencia</h1>
        <form id="emergency-form">
            <!-- Información del Paciente -->
            <div class="single-patient-info">
                <label for="nombre-paciente">Nombre del Paciente:</label>
                <input type="text" id="nombre-paciente" name="nombre-paciente" required>

                <label for="edad">Edad:</label>
                <input type="number" id="edad" name="edad" required>

                <label for="causa-emergencia">Causa de la Emergencia:</label>
                <select id="causa-emergencia" name="causa-emergencia" onchange="mostrarCampoOtros()">
                    <option value="accidente-automovilistico">Accidente automovilístico</option>
                    <option value="caida">Caída</option>
                    <option value="paro-cardiaco">Paro cardíaco</option>
                    <option value="quemadura">Quemadura</option>
                    <option value="otros">Otros</option>
                </select>

                <!-- Campo de texto oculto por defecto -->
                <div id="campo-otros" style="display: none;">
                    <label for="causa-otros">Especificar causa:</label>
                    <input type="text" id="causa-otros" name="causa-otros">
                </div>

                <label for="codigo-emergencia">Código de Emergencia:</label>
                <select id="codigo-emergencia" name="codigo-emergencia" required>
                    <option value="azul">Código Azul</option>
                    <option value="naranja">Código Naranja</option>
                    <!-- Agregue más códigos según sea necesario -->
                </select>
            </div>

            <!-- Checkbox para múltiples heridos -->
            <div>
                <input type="checkbox" id="multiple-victims" name="multiple-victims">
                <label for="multiple-victims">Múltiples Heridos</label>
            </div>

            <!-- Información para múltiples heridos (oculta por defecto) -->
            <div class="multiple-victims-info" style="display: none;">
                <label for="cantidad-heridos">Cantidad de Heridos:</label>
                <input type="number" id="cantidad-heridos" name="cantidad-heridos">

                <label for="causa-emergencia-multiple">Causa de la Emergencia:</label>
                <select id="causa-emergencia-multiple" name="causa-emergencia-multiple" onchange="mostrarCampoOtros()">
                    <option value="accidente-automovilistico">Accidente automovilístico</option>
                    <option value="caida">Caída</option>
                    <option value="paro-cardiaco">Paro cardíaco</option>
                    <option value="quemadura">Quemadura</option>
                    <option value="otros">Otros</option>
                </select>

                <label for="codigo-emergencia-multiple">Código de Emergencia:</label>
                <select id="codigo-emergencia-multiple" name="codigo-emergencia-multiple">
                    <option value="azul">Código Azul</option>
                    <option value="naranja">Código Naranja</option>
                    <!-- Agregue más códigos según sea necesario -->
                </select>
            </div>

            <button type="submit">Registrar Emergencia</button>
        </form>
    </div>

    <script src="{{ asset('js/RegistroMultiplo.js') }}"></script> <!-- Ruta a su archivo JS -->
    <script src="{{ asset('js/MostrarOtrosCampos.js') }}"></script>
</body>
</html>
