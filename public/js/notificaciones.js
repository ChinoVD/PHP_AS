document.addEventListener('DOMContentLoaded', function () {
    const notificaciones = document.querySelectorAll('.bi-chat-left-text');
    const infoPaciente = document.getElementById('info_paciente');
    const observacionesPaciente = document.getElementById('observaciones_paciente');

    // Función para mostrar la notificación seleccionada
    function toggleDetails(index) {
        // Obtener detalles de la notificación seleccionada
        const detalles = notificaciones[index].dataset.detalles;
        const notificacion = JSON.parse(detalles);
        
        // Actualizar información del paciente
        infoPaciente.innerHTML = `
            <p><strong>RUT:</strong> ${notificacion.detalles.codigo || 'Desconocido'}</p>
            <p><strong>Causas:</strong> ${notificacion.detalles.causas || 'Desconocido'}</p>
            <p><strong>Nombre del Paciente:</strong> ${notificacion.detalles.nombre || 'Desconocido'}</p>
            <p><strong>Edad:</strong> ${notificacion.detalles.edad || 'Desconocida'} años</p>
        `;

        // Actualizar observaciones
        observacionesPaciente.innerHTML = `
            <p><strong>Descripción:</strong> ${notificacion.contenido}</p>
        `;
        
        observacionesPaciente.style.display = 'block';
    }

    // Asignar eventos de clic a las notificaciones
    notificaciones.forEach((notificacion, index) => {
        notificacion.addEventListener('click', () => toggleDetails(index));
    });

    // Cargar la primera notificación al iniciar
    if (notificaciones.length > 0) {
        toggleDetails(0); // Muestra la primera notificación al cargar
    }
});