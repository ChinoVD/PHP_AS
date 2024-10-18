window.onload = function() {
    function mostrarFechaActual() {
        const fecha = new Date();
        const opciones = { year: 'numeric', month: 'long', day: 'numeric' };
        const fechaFormateada = fecha.toLocaleDateString('es-ES', opciones);
        document.getElementById('#fecha-actual').textContent = fechaFormateada;
    }

    mostrarFechaActual();
};
