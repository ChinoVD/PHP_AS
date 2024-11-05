// mostrarDetalles.js

function toggleDetails(index) {
    // Obtener la información de las notificaciones
    const notificaciones = JSON.parse(document.getElementById('notificaciones-data').textContent); // Pasar las notificaciones desde PHP a JavaScript

    // Obtener la información del paciente desde la notificación seleccionada
    const paciente = notificaciones[index].detalles;

    // Actualizar los campos de información del paciente
    document.getElementById('rut_paciente').textContent = paciente.codigo || 'Desconocido';
    document.getElementById('causas_paciente').textContent = paciente.causas || 'Desconocido';
    document.getElementById('nombre_paciente').textContent = paciente.nombre || 'Desconocido';
    document.getElementById('edad_paciente').textContent = paciente.edad || 'Desconocida';

    // Actualizar la descripción
    document.getElementById('descripcion_paciente').textContent = notificaciones[index].contenido || 'Desconocida';
    
    // Suponiendo que el tratamiento se puede obtener de los historiales
    const tratamiento = JSON.parse(document.getElementById('historiales-data').textContent); // Pasar los historiales a JavaScript
    const pacienteTratamiento = tratamiento.find(h => h.rut_paciente === paciente.codigo);
    document.getElementById('tratamiento_paciente').textContent = pacienteTratamiento ? pacienteTratamiento.tratamiento : 'Desconocido';
    
    // Mostrar las observaciones
    document.getElementById('observaciones_paciente').style.display = 'block';
}
