<?php
// EmergencyController.php

class EmergencyController {
    public function registerEmergency() {
        // Validar los datos del formulario
        $nombre = $_POST['nombre-paciente'];
        $edad = $_POST['edad'];
        $causas = $_POST['causas'];
        $codigoEmergencia = $_POST['codigo-emergencia'];

        // Si se marca la opción de múltiples heridos
        if (isset($_POST['multiple-victims'])) {
            $cantidadHeridos = $_POST['cantidad-heridos'];
            $tipoIncidente = $_POST['tipo-incidente'];
            $codigoEmergenciaMultiple = $_POST['codigo-emergencia-multiple'];
            // Guardar en la base de datos como un caso de múltiples víctimas
        } else {
            // Guardar en la base de datos como un caso individual
        }

        // Redirigir o mostrar un mensaje de éxito
        echo "Registro de emergencia completado.";
    }
}
?>
