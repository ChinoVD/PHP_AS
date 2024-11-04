function toggleDetails(notifId) {
    const details = document.getElementById(`details-${notifId}`);
    details.style.display = (details.style.display === 'none' || details.style.display === '') ? 'block' : 'none';
}
