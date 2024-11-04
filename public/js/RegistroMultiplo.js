document.getElementById('multiple-victims').addEventListener('change', function() {
    const multipleVictimsInfo = document.querySelector('.multiple-victims-info');
    if (this.checked) {
        multipleVictimsInfo.style.display = 'block';
    } else {
        multipleVictimsInfo.style.display = 'none';
    }
});
