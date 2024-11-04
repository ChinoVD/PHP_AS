function mostrarCampoOtros() {
    const select = document.getElementById('causa-emergencia');
    const campoOtros = document.getElementById('campo-otros');

    // Muestra el campo de texto si se selecciona "Otros", de lo contrario lo oculta
    if (select.value === 'otros') {
        campoOtros.style.display = 'block';
    } else {
        campoOtros.style.display = 'none';
    }
}
